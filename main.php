<div class="dashboard" id="container">
<?php
$sho = new listing;
$result=$sho->showuser();
while($row=$result->fetch_assoc()){

		echo $row['email']."<br/>";


}

?>
</div>