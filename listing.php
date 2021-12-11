<?php

//require 'db/configserver.php';

class listing{
    public $con;
	public $ename;
	public $epass;
	public $email;
	public $epic;
	//public $mysqli;
	
	public function conn(){
	
	   
	
	}
	public function addemp($ename,$epass,$email,$epic){
	
	$con= new db("localhost","root","root123","prakash");
    $mysqli = $con->dbconnect();
	$mysqli->query("INSERT INTO employe(name,email,pass,pic) VALUES('$ename','$email','$epass','$epic')");
	$inid=$mysqli->insert_id;
	if($inid == null){
	
	   echo "add employee fail";
	   return false;
	   
	
	}
	else{
	
	   echo "add employee sucessfull";
	    return true;
	
	}
	$mysqli->close();
	
	}
	public function showuser(){
	
	    $con= new db("localhost","root","root123","prakash");
        $mysqli = $con->dbconnect();	   
	    $stmt=$mysqli->query("select * from employe");
		
		//$mysqli->close();
		return $stmt;
	
	
	
	}
	public function signin($ename,$epass){
	  
	   
	   $con= new db("localhost","root","root123","prakash");
       $mysqli = $con->dbconnect();	   
	   $stmt=$mysqli->query("select * from employe WHERE name='$ename' AND pass='$epass'");
	   return $stmt;
	   
	
	
	}
	
	
	
	
	
	




}

?>

