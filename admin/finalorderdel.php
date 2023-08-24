<?php
include 'connection.php';
include 'header.php';
$qry="delete from finalorder where id='". $_GET['id']."' ";
$ans=mysqli_query($conn,$qry);

if($ans>0)
 {
  
			echo "<script language='javascript'>alert('Delete Successfully...!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='finalorder.php' </script>";
} 
else 
{
  echo "<script language='javascript'>alert('Record Not Delete...!!!')
			</script>";
}
?>