<?php
//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
include ("connect_database.php");

//checking if username is not available
$result = mysqli_query($con,"SELECT * FROM credit_card WHERE credit_card_number = ".$q."");

echo $result->num_rows;
?>