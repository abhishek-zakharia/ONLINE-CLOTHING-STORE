<?php
include 'connection.php';
include 'header.php';

$ans=mysqli_query($conn,"delete from about where id='". $_GET['id']."' ");

if($ans>0)
 {
  
			echo "<script language='javascript'>alert('Delete Successfully...!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='about.php' </script>";
} 
else 
{
  echo "<script language='javascript'>alert('Record Not Delete...!!!')
			</script>";
}
?>