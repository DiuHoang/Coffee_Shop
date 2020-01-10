<?php
    class Cafe {
        public $id;
        public $name;
        public $price;
        public $size;
        public $image;
        
        function __construct($id, $name, $price, $size, $image) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
            $this->image = $image;
        }
        function getImagePath(){
            return $this->image;
        }
    }
?>