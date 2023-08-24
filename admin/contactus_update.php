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
<br>
<table class="responstable">

<?php 
		$id=$_GET["id"];
        $row=mysqli_query($conn,"select * from contact_us where id=$id");
        $rs=mysqli_fetch_array($row);

echo "<form action='contactus_update.php' method='POST'>";
echo "								
<tr>
<td>Name&nbsp;<td><input type='text' name='name' value='$rs[name]'/>
</tr><br>";

echo "								
<tr>
<td>Email&nbsp;<td><input type='email' name='email' value='$rs[email]' />
</tr><br>";
    
echo "								
<tr>
<td>Ph No&nbsp;<td><input type='text' name='phone' value=' $rs[phone]' />
</tr><br>";
    
echo "
<tr>
<td>Address&nbsp;<td><textarea rows='10' cols='50' name='address'> $rs[adress] </textarea><br>
</tr>

<tr>
<td colspan='2'><input type='submit' name='submit' value='UPDATE' />
<input type='reset' value='CLEAR' />
</tr>
</form>
</table>";
?>

<?php
if(isset($_POST['submit']))
{
$id=$_GET["id"];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['adress'];


	if($a!="" && $b!="" && $c!="" && $d!="")
	{

		$ans=mysqli_query($conn,"update contact_us set name='$a',email='$b',phno='$c',adress='$d' where id='$id' ") or die("error");
		
		if($ans>0)
		{
			
			echo "<script language='javascript'>alert('UPLOAD Successfull!!!')
			</script>";
			echo "<script language='javascript'>window.location.href='contactus.php' </script>";
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
