<?php
    class Order {
        public $id;
        public $id_user;
        public $id_products;
        public $quantity;
    
        function __construct($id, $id_user, $id_products, $quantity) {
            $this->id = $id;
            $this->id_user = $id_user;
            $this->id_products = $id_products;
            $this->quantity = $quantity;
        }
        
    }
?>