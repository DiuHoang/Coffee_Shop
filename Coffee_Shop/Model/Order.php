<?php
class Order
{
    public $id;
    public $name_cus;
    public $address_cus;
    public $phone_cus;
    public $name_product;
    public $size_product;
    public $quantity_product;
    public $price_product;

    function __construct($id, $name_cus, $address_cus, $phone_cus, $name_product, $size_product, $quantity_product, $price_product)
    {
        $this->id = $id;
        $this->name_cus = $name_cus;
        $this->address_cus = $address_cus;
        $this->phone_cus = $phone_cus;
        $this->name_product = $name_product;
        $this->size_product = $size_product;
        $this->quantity_product = $quantity_product;
        $this->price_product = $price_product;
    }
}
