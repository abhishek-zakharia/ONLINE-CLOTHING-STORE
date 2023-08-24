<?php
include 'connection.php';
$query= "delete from registration where id='".$_GET['id']."'";
$ans=mysqli_query($conn,$query);
if($ans>0)
 {
  
			echo "<script language='javascript'>alert('Delete Successfully...!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='RegistarationView.php' </script>";
} 
else 
{
  echo "<script language='javascript'>alert('Record Not Delete...!!!')</script>";
}
?>