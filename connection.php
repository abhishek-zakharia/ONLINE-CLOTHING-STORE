<?php
@session_start();
$host="localhost";
$username="root";
$password="";
$database="Shopping";
$conn=mysqli_connect($host,$username,$password,$database);
if($conn)
{
	//echo "database Connected";
}
else
{
	echo "database Not Connected";
}	
?>