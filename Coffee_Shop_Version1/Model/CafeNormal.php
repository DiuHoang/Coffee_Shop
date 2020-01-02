<?php
    require_once "Cafe.php";
    class CafeNormal extends Cafe {
        function getDisplayPrice(){
            if($this->size == "M"){
                return ($this->price * 80 / 100)." VND "." (-20%) ";
            }
            return $this->price." VND";
        }
    }
?>