<?php
	require "database.php";
class User{
	public $id;
	public $username;
	public $fullName;
	public $email;
	public $password;
	public $gender;

	function __construct($id, $username, $fullName, $email, $password, $gender) {
		$this->id = $id;
		$this->username = $username;
		$this->fullName = $fullName;
		$this->email = $email;
		$this->password = $password;
		$this->gender = $gender;
    }
    
    function getIdUser(){
    	return $this->id;
    }
	
	/*function isAdmin(){
		if($this->username == "admin"){
			return true;
		}
		else{return false;}
		

	}*/

	function getFullName(){
		return $this->fullName;
	}
	
}
?>