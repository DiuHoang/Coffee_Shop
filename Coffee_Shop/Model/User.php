<?php
require "../Database/database.php";
class User
{
	public $id;
	public $username;
	public $fullName;
	public $email;
	public $password;
	public $gender;

	function __construct($id, $username, $fullName, $email, $password, $gender)
	{
		$this->id = $id;
		$this->username = $username;
		$this->fullName = $fullName;
		$this->email = $email;
		$this->password = $password;
		$this->gender = $gender;
	}

	function getIdUser()
	{
		return $this->id;
	}

	function getFullName()
	{
		return $this->fullName;
	}
}
