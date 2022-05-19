<?php

namespace app\repository;

use app\helper\BaseRepository;
use app\repository\ProductStock;
use app\repository\ProductPrice;
use app\repository\ProductCategory;

class Product extends BaseRepository
{
    public function getTableName()
    {
        return "produto";
    }

    public function loadProduct($idProduct)
    {
        $stock = new ProductStock();
        $price = new ProductPrice();
        $category = new ProductCategory();

        $dataProduct = $this->loadById($idProduct);
        return [
            'data' => $dataProduct,
            'category' => $category->loadById($dataProduct['fk_categoria']),
            'stock' => $stock->loadCurrentStock($idProduct),
            'price' => $price->loadCurrentPrice($idProduct),
        ];
    }

    /**
     * Busca produtos e retorna por listado por categoria
     *
     * @param $text
     * @param $order => preco|ASC | nome|ASC
     * @param $page
     * @param $limit
     * @return array|mixed
     */
    public function searchProduct($text = '', $order = '', $page = 0, $limit = 10)
    {
        $page = abs(intval($page));
        if ($page > 0) {
            $page = $page - 1;
        }

        //buscar produtos
        $sql = "select produto.id,produto.nome, produto.fk_categoria, (
                        select produto_preco.preco
                        from produto_preco 
                        where produto.id=produto_preco.fk_produto
                        order by produto_preco.data_criacao
                        limit 0,1
                    ) as preco
                from produto 
                where produto.nome like '%$text%'
                and produto.fl_desabilitado = 0 
                ";

        //count
        $countProduct = $this->execQuery($sql);

        //ordenacao
        if (!empty($order)) {
            $ex = explode('-', $order);
            $currentOrder = $ex[0];
            $currentOrderDirect = $ex[1];
            $sql .= "order by " . $currentOrder . " " . $currentOrderDirect;
        }

        //paginacao
        $sql .= " limit " . ($page * $limit) . "," . $limit;

        $findProduct = $this->execQuery($sql);

        //complementar dados por categoria
        $productData = [];
        foreach ($findProduct as $k) {
            $dataProd = $this->loadProduct($k['id']);
            $productData[$k['fk_categoria']][] = $dataProd;
        }

        return [
            'term' => $text,
            'currentPage' => (!$page) ? 0 : $page,
            'currentOrder' => $order,
            'limitPerPage' => $limit,
            'totalPages' => abs(ceil(count($countProduct) / $limit)),
            'totalItems' => count($findProduct),
            'data' => $productData,
        ];
    }
}