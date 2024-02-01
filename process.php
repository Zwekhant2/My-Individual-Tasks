<?php 
$title = "Ex3";
include("header.php");
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];

echo "<h3>Hello $Firstname $Lastname, You are welcome to my site.</h3>";

include("footer.php");
?>