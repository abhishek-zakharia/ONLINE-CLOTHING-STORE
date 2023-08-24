<?php
include("connection.php");

if(isset($_POST['plcordr']))
{

$id = $_POST['pid'];
$size = $_POST['cat1'];
$qty = $_POST['qty'];
$d=date('d-m-y');
$uno=$_SESSION["uno"];
$uname=$_SESSION["uname"];

$q9="select * from product where product_id=".$id;
$r9=mysqli_query($conn,$q9) or die("could not get data from the database registration");
$row=mysqli_fetch_array($r9);

$fqty=(int)$row[6]-(int)$qty;
$upd="UPDATE `product` SET `product_quantity`=".$fqty." WHERE `product_id`=".$id;
$r1=mysqli_query($conn,$upd) or die("could not get data from the database");


$q10="select * from registration where id=".$_SESSION['uno'];
$r10=mysqli_query($conn,$q10) or die("could not get data from the database registration");
$row10=mysqli_fetch_array($r10);

$tot=(int)$row[3]*(int)$qty;
$q1="insert into finalorder values(null,'$d',$row[0],'$row[1]',$row[3],'$row[2]','$row[5]',$uno,'$uname','$row10[5]',$qty,'$size',$tot)";
$r1=mysqli_query($conn,$q1) or die("error".$q1);

$q6="delete from tmp_addtocart where uno=".$_SESSION['uno'];
$r6=mysqli_query($conn,$q6) or die("could not get data from the database table");

echo "<script language='javascript'>window.location.href='placedorder.php'</script>";
}
else{
    echo "Something went wrong..";
}
?>