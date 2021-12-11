<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root123');
define('DB_DATABASE', 'prakash');
//public $mysqli;
class DB_Class {
    
	public $mysqli;
    function __construct() {
	
	
        $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE); 
       
    }

}
?>