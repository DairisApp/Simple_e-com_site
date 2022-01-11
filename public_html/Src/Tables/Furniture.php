<?php

namespace Foo\Tables;

use Foo\Tables\TableBase;
use Foo\Model\ModelProduct;

class Furniture extends TableBase
{
    private $width;
    private $height;
    private $length;

    public function __construct($product)
    {
        parent::__construct($product);
        $this->setWidth($product['width']);
        $this->setHeight($product['height']);
        $this->setLength($product['length']);
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
            'height' => $this->getHeight(),
            'width' => $this->getWidth(),
            'length' => $this->getLength()
        ];

        $save->saveProduct($product);
    }

    public function delete()
    {
    }

    public function table()
    {
        $this->base();
        $this->tableFurniture();
    }

    public function tableFurniture()
    {
        echo <<<EOF
                    <li class='list-group-item border-0 pt-0 pb-5'>Dimensions: {$this->getWidth()}x{$this->getHeight()}x{$this->getLength()}</li>
                    </ul>
                    </div>
                EOF;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getLength()
    {
        return $this->length;
    }
}
