<?php
include("connection.php");
$pno=$_REQUEST["pno"];
$q="delete from tmp_addtocart where cno=$pno";
$r=mysqli_query($conn,$q) or die("could not get data from the database table");
$_SESSION['count']=$_SESSION['count']-1; 

header("location:mycart.php");
?>