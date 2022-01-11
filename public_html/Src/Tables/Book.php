<?php

namespace Foo\Tables;

use Foo\Tables\TableBase;
use Foo\Model\ModelProduct;

class Book extends TableBase
{
    private $weight;

    public function __construct($product)
    {
        parent::__construct($product);
        $this->setWeight($product['weight']);
    }

    public function save()
    {
        $save = new ModelProduct();

        $product = [
            'id' => $this->getId(),
            'productType' => $this->getType(),
            'sku' => $this->getSku(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'weight' => $this->getWeight(),
        ];

        $save->saveProduct($product);
    }

    public function delete()
    {
    }

    public function table()
    {
        $this->base();
        $this->tableBook();
    }


    public function tableBook()
    {
        echo <<<EOF
                <li class='list-group-item border-0 pt-0 pb-5'>Weight: {$this->getWeight()} KG</li>
                </ul>
                </div>
                EOF;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
