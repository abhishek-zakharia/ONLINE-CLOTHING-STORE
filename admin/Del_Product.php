<?php
include 'header.php';
include 'connection.php';

if(isset($_SESSION["email"]))
{

}
else
{
    echo "<script language='javascript'>window.location.href='AdminLogin.php'</script>";
}


?>
<?php
$query="delete from product where product_id='".$_GET['id']."' ";
echo "<script language='javascript'>alert('Are You Sure ?')</script>";
$ans=mysqli_query($conn,$query);

if($ans>0)
{
  
			echo "<script language='javascript'>alert('Delete Successfully...!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='Disp_Product.php' </script>";
} 
else 
{
  			echo "<script language='javascript'>alert('Product Is Not Deleted...!!!')</script>";
}
?>


<?php
include("footer.php");
?>