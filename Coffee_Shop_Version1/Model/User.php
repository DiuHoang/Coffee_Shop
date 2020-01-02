<?php
class User{
	public $username;
	public $password;
    
	function manageCoffee(){
		return $this->username == "admin";
	}
	function userCoffee(){
		return $this->username != "admin";
	}
	
}
?>