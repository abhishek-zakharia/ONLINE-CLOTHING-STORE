<?php
include 'connection.php';
include 'header.php';


$id=$_GET['id'];
$ans=mysqli_query($conn,"delete from drop_down where cat_id='". $id."' ");

if($ans>0)
 {
  
			echo "<script language='javascript'>alert('Delete Successfully...!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='Add_Cat.php' </script>";
} 
else 
{
  echo "<script language='javascript'>alert('Category Not Deleted...!!!')
			</script>";
}
?>