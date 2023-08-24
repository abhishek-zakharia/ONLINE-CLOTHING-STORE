<?php
include("connection.php");

$d=date('d-m-y');
$uno=$_SESSION["uno"];
$uname=$_SESSION["uname"];

$q="select * from tmp_addtocart where uno=".$_SESSION['uno'];
$r=mysqli_query($conn,$q) or die("could not get data from the database table");
while($row=mysqli_fetch_array($r))
{
$q10="select * from registration where id=".$_SESSION['uno'];
$r10=mysqli_query($conn,$q10) or die("could not get data from the database registration");
$row10=mysqli_fetch_array($r10);

$q9="select * from product where product_id=".$row[2];
$r9=mysqli_query($conn,$q9) or die("could not get data from the database registration");
$row9=mysqli_fetch_array($r9);

$fqty=(int)$row9[6]-(int)$row[9];
$upd="UPDATE `product` SET `product_quantity`=".$fqty." WHERE `product_id`=".$row[2];
$r1=mysqli_query($conn,$upd) or die("could not get data from the database");

// $dup="SELECT * FROM `finalorder`";
// $rdup=mysqli_query($conn,$dup) or die("duplicate....");
// while($row11=mysqli_fetch_array($rdup))
// {
//     if($row9[0]==$row11[2])
//     {
//         $uqty = (int)$row11[9]+(int)$row[9];
//         $fupd="UPDATE `finalorder` SET `qty`=".$uqty." WHERE id=".$row9[0];
//         $frs=mysqli_query($conn,$fupd) or die("error".$fupd);
//     }
    
        $q1="insert into finalorder values(null,'$d',$row[2],'$row[3]',$row[4],'$row[5]','$row[6]',$uno,'$uname','$row10[5]',$row[9],'$row[10]',$row[11])";
        $r1=mysqli_query($conn,$q1) or die("error".$q1);
//     }
// }



}
$q6="delete from tmp_addtocart where uno=".$_SESSION['uno'];
$r6=mysqli_query($conn,$q6) or die("could not get data from the database table");

echo "<script language='javascript'>window.location.href='placedorder.php'</script>";
?>