
<?php

$mysql = mysql_connect("localhost", "root", "");
mysql_select_db("prakash");
$res = mysql_query("SELECT * FROM users", $mysql);
$row = mysql_fetch_assoc($res);
echo $row['email'];
?>

<?php


$mysqli = mysqli_connect("localhost", "root", "root123", "prakash");
$res = mysqli_query($mysqli, "SELECT * FROM users");
$row = mysqli_fetch_assoc($res);
echo $row['email'];


?>
<?php

	$host="localhost";
	$user="root";
	$password="";
	$database="prakash";

	$mysqli = new mysqli($host,$user,$password,$database);
	if($mysqli->connect_errno){

	   echo "failed to connect to Mysql:".$mysqli->connect_error;

	}
	$res=$mysqli->query("select * from users");
	$row=$res->fetch_assoc();
	echo $row['email'];
	$mysqli->close();


?>
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

$con= new db("localhost","root","root123","prakash");
$mysqli = $con->dbconnect();
$stmt = $mysqli->query("select * from users");
$row=$stmt->fetch_assoc();
echo $row['email'];
$mysqli->close();



?>