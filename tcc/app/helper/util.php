<?php
session_start();

/**
 * Configuração base
 *
 * @return array
 */
function bootstrap()
{
    return [
        'URL' => 'http://localhost/aulas/tcc/public/',
        'FRONT' => [
            'PATH_TEMPLATE' => 'aulas/tcc/layout',
            'NAME_TEMPLATE' => 'layout.php',
        ],
        'DB' => [
            'HOST' => '127.0.0.1',
            'USUARIO' => 'root',
            'SENHA' => '',
            'DB' => 'kit_cachaca',
        ],
        'SEARCH' => [
            'PAGE_LIMIT' => 10,
        ],
        'ORDER' => [
            'VALUE_DEFAULT_SHIPPING' => 15,
        ],
        'STORE_INFO' => [
            'NAME' => 'Kit Cachaça',
            'ADDRESS' => 'Rua Virtual Inexistente, 171, São Paulo/SP',
            'CNPJ' => '99.999.999/0001-99',
            'PHONE' => '(11) 99999-0000',
            'EMAIL' => 'email@dominio.com',
            'LOGO' => [
                '1' => 'assets/img/Logo KIT 2.png',
                '2' => 'assets/img/Logo KIT4_Prancheta 1.png',
                '3' => 'assets/img/logo.png'
            ],
            'BANNER' => [
                'assets/img/banner/banner1.png',
                'assets/img/banner/banner2.png',
                'assets/img/banner/banner3.png'
            ]
        ]
    ];
}


/**
 * Retorna o caminho certo do item buscado
 *
 * @param $path
 * @return string
 */
function urlBase($path)
{
    return bootstrap()['URL'] . $path;
}

/**
 * Realiza o redirecionamento
 *
 * @param $path
 */
function redirect($path)
{
    header('Location: ' . urlBase($path));
    exit();
}

/**
 * Printa o caminho de um arquivo CSS ou JS
 *
 * @param $file
 * @param $path
 * @return string
 */
function includeAssetsString($file, $path)
{
    $ex = explode(".", $file);
    $ext = array_pop($ex);
    if ($ext === 'css') {
        return '<link rel="stylesheet" href="' . $path . 'assets/' . $file . '">';
    }
    if ($ext === 'js') {
        return '<script src="' . $path . 'assets/' . $file . '"></script>';
    }
}


/**
 * Verifica se o usuario esta logado
 */
function security()
{
    if (!$_SESSION['usuario']) {
        redirect('login/');
    }
}

/**
 * Chamar o front por templates
 *
 * @param $path
 * @param array $arrArgs
 * @return false|string
 */
function template($path, $arrArgs = [])
{
    if (is_array($arrArgs)) {
        extract($arrArgs);
    }
    $boo = bootstrap()['FRONT'];
    ob_start();
    include $_SERVER['DOCUMENT_ROOT']
        . "/"
        . $boo['PATH_TEMPLATE']
        . "/"
        . $path
        . "."
        . $boo['NAME_TEMPLATE'];
    return ob_get_clean();
}


/**
 * Realizar uma conexao com o banco de dados
 *
 * @return false|mysqli
 */
function mySqlConn()
{
    $boo = bootstrap()['DB'];
    $conexao = mysqli_connect($boo['HOST'], $boo['USUARIO'], $boo['SENHA'], $boo['DB'])
    or die ('Não foi possível conectar ao banco de dados');
    return $conexao;
}
