<?php
session_start();
include 'header.php';
include 'connection.php';


if(isset($_POST['AddCart']))
{
$product_id = $_POST['pid'];
$product_name = $_POST['pname'];
$product_price = $_POST['pprice'];
$qty = $_POST['qty'];
$size = $_POST['cat1'];

$q="select * from product where product_id=$product_id";

$r=mysqli_query($conn,$q) or die("could not get data from the database table");

$row=mysqli_fetch_array($r);

$tot=(int)$row[3]*(int)$qty;

$d=date('d-m-y');

$uno=$_SESSION['uno'];

$uname=$_SESSION['uname'];

$q1="insert into tmp_addtocart values (null,'$d',$row[0],'$row[1]',$row[3],'$row[2]','$row[4]',$uno,'$uname',$qty,'$size',$tot)";
$r1=mysqli_query($conn,$q1) or die("error ".$q1);
echo "<script language='javascript'>window.location.href='mycart.php'</script>";
}

// if(isset($_POST['AddCart']))
// {
//     $check_product = array($_SESSION['cart'],'productName');
    
//     if(in_array($product_name,$check_product))
//     {
//         echo "<script>alert('Product Already Added'); 
//         window.location.href='ViewDetail.php?product_id=$product_id';
//         </script>";
//     }
//     else
//     {
//         $_SESSION['cart'][] = array('productName'=>$product_name,'productPrice'=>$product_price,
//         'productQuantity'=>$product_quantity);
//         header("location:mycart.php");
//     }
// }
// if(isset($_POST['del']))
// {
//     foreach($_SESSION['cart'] as $key => $value)
//     {
//         if($value['product_name'] == $_POST['item'])
//         {
//             unset($_SESSION['cart'],$key);
//             $_SESSION['cart'] = array_values($_SESSION['cart']);
//             header('location:mycart.php');
//         }
//     }
// }
?>