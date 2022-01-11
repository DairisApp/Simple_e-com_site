<?php

namespace Foo\Tables;

use Foo\Dbh\Products;

abstract class TableBase
{
    public abstract function table();
    public abstract function save();
    public abstract function delete();

    private $id = null;
    private $type;
    private $sku;
    private $name;
    private $price;

    public function __construct($product)
    {
        $this->setId($product['id']);
        $this->setType($product['productType']);
        $this->setSku($product['sku']);
        $this->setName($product['name']);
        $this->setPrice($product['price']);
    }
    
    public function base()
    {
        echo <<<    EOF
        <div class="mx-3 my-4">
            <ul class="list-group border border-2 border-dark mx-2 p-3">
                <li class="list-group-item border-0 d-flex pt-4 pb-1 border-bottom-0"><input class="delete-checkbox" type="checkbox" name="checkbox[]" value="{$this->getId()}"></input> </li>
                <li class="list-group-item border-0 py-0">{$this->getSku()}</li>
                <li class="list-group-item border-0 py-0">{$this->getName()}</li>
                <li class="list-group-item border-0 py-0">{$this->getPrice()}$</li>
EOF;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setType($type)
    {
        $this->type = $type;
    }  

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
