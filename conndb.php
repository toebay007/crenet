<?php

class connCrenet{
	protected $conn;			
	function __construct(){
		session_start();				
		$this->conn = new Mysqli('localhost','root','','crenet');
	}
}




?>