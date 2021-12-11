<?php

session_start();
require 'db/configserver.php';
require 'listing.php';

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>oop-login</title>
<link rel="stylesheet" href="">
<script src="" ></script>
<script type="text/javascript"></script>
<style type="text/css">
</style>

</head>
<body>
<div id="header" class="container">
<?php

if(isset($_SESSION['logedIn'])){

?>

<a href="index.php?register=logout" >Logout</a>

<?php

}
else{

?>
<a href="index.php" >Home</a>
<a href="index.php?register=sup" >sign Up</a>
<a href="index.php?register=sin" >sign in</a>
<?php

}
//$con= new db("localhost","root","root123","prakash");
//$mysqli = $con->dbconnect();


?>

</div>
<div id="content" class="container">
<?php

$reg='';
$fc='';

if(isset($_GET['register'])){

$reg=$_GET['register'];

}
if(isset($_GET['fc'])){

$fc=$_GET['fc'];

}
if($reg== ''){


include 'main.php';

}
if($reg== 'sup'){


include 'html/signup.html';

}
if($reg== 'sin'){

include 'html/signin.html';


}
if($reg== 'logout'){

$_SESSION['logedIn'] = false;
unset($_SESSION['logedIn']);
session_destroy();
header('location:index.php');
exit;

}
if($fc == 'fsup'){

	$email = $_POST['email'];
	$ename = $_POST['user'];
	$epass =  $_POST['pass'];
	$epic =  $_FILES['userpic']['name'];
	$uadd= new listing;
	$succ=$uadd->addemp($ename,$epass,$email,$epic);
	if($succ){
	
	   move_uploaded_file($_FILES['userpic']['tmp_name'],'upload/'.$epic);
	   header('Location:index.php');
	 
	}
	else{
	
	"Add User fail try again";
	
	}
	
	


}
if($fc == 'fsin'){

    $name = htmlentities($_POST['name']);
	$pass = htmlentities($_POST['pass']);
	//echo $name;
	//echo $pass;
	$usin=new listing;
	$result=$usin->signin($name,$pass);
	$row=$result->fetch_assoc();
	if($row == null){
	
	  echo "login fail";
	
	}
	else{
	
	   echo "login success ";
	   echo $row['email'];
	   $_SESSION['logedIn'] = true;
	
	}
	$row_cnt = $result->num_rows;

   if($row_cnt > 0){
   
       echo " Result set has  ".$row_cnt." rows ";
   
   }
   else{
   
        echo " Result set has  no rows ";
   
   }
	
	


}


?>

</div>
</body>

</html>
