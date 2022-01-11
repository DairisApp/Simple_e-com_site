<?php

namespace Foo\Tables;

use Foo\Tables\TableBase;
use Foo\Model\ModelProduct;

class DVD extends TableBase
{
    private $size;

    public function __construct($product)
    {
        parent::__construct($product);
        $this->setSize($product['size']);
    }

    public function save()
    {
        $save = new ModelProduct();

        $product =[
            'id' => $this->getId(),
            'productType' => $this->getType(),
            'sku' => $this->getSku(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'size' => $this->getSize(),
        ];

        $save->saveProduct($product);
    }

    public function delete()
    {
        $save = new ModelProduct();

        $productId = $this->getId();

        $save->deleteProduct($productId);
    }

    public function table()
    {
        $this->base();
        $this->tableDVD();
    }

    public function tableDVD()
    {
        echo <<<EOF
        <li class='list-group-item border-0 pt-0 pb-5'>Weight: {$this->getSize()} KG</li>
        </ul>
        </div>
        EOF;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
