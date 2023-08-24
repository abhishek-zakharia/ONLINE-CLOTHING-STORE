<?php	
include("connection.php");
include("header.php");
?>
<br><br><br>
<head>
<link href="css/table.css" rel="stylesheet">
</head>    
<body>
<center>
<div class="img"> 
<br>
<table class="responstable">

<?php 
								$id=$_GET["id"];
								$row=mysqli_query($conn,"select *from about where id=$id");
								$rs=mysqli_fetch_array($row);
echo "<form action='aboutus_update.php?id=$rs[id]' method='POST'>";

echo "								
<tr>
<td>ENTER HEADING :<td><input type='text' name='name'  value=' $rs[name] ' />
</tr><br>";


echo "
<tr>
<td>ENTER DETAIL :<td><textarea rows='10' cols='50' name='con'> $rs[detail] </textarea><br>
</tr>

<tr>
<td colspan='2'><button type='submit' class='btn btn-primary btn-lg' name='submit'>Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type='reset'  class='btn btn-primary btn-lg' name='submit'>Clear</button></div><br>

</tr>
</form>
</table>";
?>

<?php
if(isset($_POST['submit']))
{

$id=$_GET["id"];
$hed=$_POST['name'];
$detail=$_POST['con'];


	if($hed!="" && $detail!="")
	{
	

		$ans=mysqli_query($conn,"update about set name='$hed',detail='$detail' where id='$id' ") or die("error");
		
		if($ans>0)
		{
			
			echo "<script language='javascript'>alert('UPLOAD Successful!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='about.php' </script>";
		}
		else
		{
			echo "<script language='javascript'>alert('Some problem')
			</script>";
		}
	}
	else
	{
		echo "<script language='javascript'>alert('ENTER HEADING & DETAIL..!!')
			</script>";
	}

}

?>
<?php
include("footer.php");
?>
