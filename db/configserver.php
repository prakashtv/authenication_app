<?php

class db{

	public $host;
	public $user;
	public $password;
	public $database;
	public $mysqli;
    
	public function __construct($host,$user,$password,$database){
	
	
		$this->host=$host;
		$this->user=$user;
		$this->password=$password;
		$this->database=$database;




	}
	public function dbconnect(){
	
	
		$this->mysqli= new mysqli($this->host,$this->user,$this->password,$this->database);
	    if($this->mysqli->connect_errno){

	       echo "failed to connect to Mysql:".$this->mysqli->connect_error;

	   }   
	   return $this->mysqli;
	
	
	}
	
	



}





?>