<?php

namespace Foo\Model;

use Foo\Dbh\Dbh;

class ModelProduct
{
    public function __construct()
    {
    }

    public function getAllProducts()
    {
        $con = new Dbh();
        $db = $con->pdo();

        $sql = "SELECT * FROM store_table order by id desc";

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    public function getProductBy($id)
    {
        $con = new Dbh();
        $db = $con->pdo();

        $sql = "SELECT * FROM store_table WHERE id = " . $id;

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    public function saveProduct($product)
    {
        $con = new Dbh();
        $db = $con->pdo();

        ////create colums and extracts values from the passed array
        $columns = implode(', ', array_keys($product));
        $values = implode("', '", array_values($product));
        //$products = array_values($result);

        $sql = "INSERT INTO store_table ({$columns}) VALUES ('{$values}')";

        $stmt = $db->prepare($sql);
        $stmt->execute(array_values($product));
    }

    public function deleteProduct($id)
    {
        $con = new Dbh();
        $db = $con->pdo();

        var_dump($id);

        $sql = "DELETE FROM store_table WHERE id = " . $id;

        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
}
