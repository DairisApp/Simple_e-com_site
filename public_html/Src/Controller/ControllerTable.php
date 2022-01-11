<?php
require_once realpath("../../vendor/autoload.php");

//namespace Foo\Controller;

use Foo\Model\ModelProduct;

class ControllerTable
{
    public function saveProduct()
    {
        $values = filter_input_array(INPUT_POST);
        $type = "Foo\\Tables\\" . $values['productType'];

        $product = new $type($values);
        $product->save();
    }

    public function deleteProduct()
    {
        $id = $_POST['checkbox'];
        $delete = new ModelProduct();
        
        var_dump($id);
        
        foreach($id as $id){
        $delete->deleteProduct($id);
        }
    }
}

if (isset($_POST['save'])) {

    $call = new ControllerTable();
    $call->saveProduct();

    header('Location: ../../index.php');
}

if (isset($_POST['delete'])) {

    $call = new ControllerTable();
    $call->deleteProduct();

    header('Location: ../../index.php');
}
