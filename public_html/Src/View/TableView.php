<?php

namespace Foo\View;

use Foo\Dbh\Products;
use Foo\Model\ModelProduct;

class TableView
{
  function hello()
  {
    $info = new ModelProduct();
    $products = $info->getAllProducts();

    $ids = array_column($products, 'id');

    //Debug
    // var_dump($ids);
    // echo "<br />";

    

    foreach ($ids as $id) {
      $product = $info->getProductBy($id);
      $type = "Foo\\Tables\\" . $product['productType'];

      $call = new $type($product);
      $call->table($product);

      //Debug
      // var_dump($type);
      // echo "<br />";
    }
  }
}
