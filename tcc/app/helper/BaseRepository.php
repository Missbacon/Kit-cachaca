<?php

namespace app\helper;

abstract class  BaseRepository
{
    public abstract function getTableName();

    protected function conn()
    {
        return mySqlConn();
    }

    protected function cleanString($txt)
    {
        return mysqli_real_escape_string($this->conn(), $txt);
    }

    protected function execQuery($query)
    {
        $result = mysqli_query($this->conn(), $query);
        return $result->fetch_all(MYSQLI_BOTH);
    }

    /**************************************************************
     * DAO
     **************************************************************/

    /**
     * Carregar produto por ID
     *
     * @param $value
     * @return mixed
     */
    public function loadById($value)
    {
        $data = $this->loadByField('id', $value);
        if (!empty($data)) {
            return $data[0];
        }
        return null;
    }

    /**
     * Carregar produto por campo
     *
     * @param $field
     * @param $value
     * @return mixed
     */
    public function loadByField($field, $value)
    {
        $table = $this->getTableName();
        $sql = "select * 
                from $table 
                where $field = '$value'";

        return $this->execQuery($sql);
    }

    /**
     * Deletar produto por campo
     *
     * @param $field
     * @param $value
     * @return bool|mysqli_result
     */
    public function deleteByField($field, $value)
    {
        $table = $this->getTableName();
        $sql = "delete 
                from $table 
                where $field = '$value'";

        $result = mysqli_query($this->conn(), $sql);

        return $result;
    }

    /**
     * Inserir um item no banco
     *
     * @param $arrFieldsValues
     * @return bool|mysqli_result
     */
    public function insert($arrFieldsValues)
    {
        $table = $this->getTableName();
        $fields = array_keys($arrFieldsValues);
        $values = array_values($arrFieldsValues);

        $impFields = implode(',', $fields);
        $impValues = implode('","', $values);

        $sql = "insert 
                into $table ($impFields) 
                values (\"$impValues\")";

        $result = mysqli_query($this->conn(), $sql);
        $id = mysqli_insert_id($this->conn());
        return $id;
    }

    /**
     * Alterar um item ano banco
     *
     * @param $fields
     * @param $whereField
     * @param $whereValue
     * @return bool|mysqli_result
     */
    public function update($arrFieldsValues, $whereField, $whereValue)
    {
        $table = $this->getTableName();

        $arr = [];
        foreach ($arrFieldsValues as $k => $v) {
            $arr[] = "${$k} = '${$v}'";
        }

        $impFields = implode(',', $arr);

        $sql = "update 
                set $table ($impFields) 
                where $whereField = '$whereValue'";

        $result = mysqli_query($this->conn(), $sql);
        return $result;
    }
}