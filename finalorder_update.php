<?php
include 'header.php';
include 'connection.php';

?>
<br><br><br>
<head>
<link href="css/table.css" rel="stylesheet">
</head>    
<body>

<br>
<table class="responstable">

<div class="inside-banner">
  <div class="container"> 
   
</div>
</div>
<!-- banner -->


<?php 
		$id=$_GET["id"];
		$query="select * from tmp_addtocart where id=$id";
		$row=mysqli_query($conn,$query);

		$rs=mysqli_fetch_array($row);
?>


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
      <form id="f1" action="Update_Product.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        Enter Product Name<input type="text" class="form-control" name="name" placeholder="Full Name" value='<?php echo $rs['name']; ?>' name="name"><br><br>
		Image<input type="file" name="file1"/><br>
		<img src='<?php echo $rs['product_img']; ?>' height="100" width="100">    
		<br><br>
		<?php echo "DISCRIPTION <textarea class='form-control' name='dis' rows='5'>$rs[product_discription]</textarea><br><br>";?>
        SELECT CATEGORY  
		
		<?php
		if($rs['product_category']=="mens shirts")
		{

		?>
		<select name="cat">

        <option><?php echo $rs['product_category'];?></option>
        <option>mens t-shirts</option>
        <option>mens kurtas</option>
		<option>mens jeans</option>
		<option>mens shuits</option>
        <option>womens kurties</option>
	    <option>womens saree</option>
		<option>womens dress</option>
		<option>womens jeans</option>
		
		</select><br><br>

		<?php	
		}

		else if($rs['product_category']=="mens t-shirts")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens shuits</option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			</select><br><br>
	
			<?php
			
		}
		else if($rs['product_category']=="mens kurtas")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>mens shirts</option>
			<option>mens t-shirts</option>
			<option>mens jeans</option>
			<option>mens shuits</option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			</select><br><br>
	
			<?php
			
		}
		else if($rs['product_category']=="mens jeans")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>mens shirts</option>
			<option>mens t-shirts</option>
			<option>mens kurtas</option>
			<option>mens shuits</option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			</select><br><br>
	
			<?php
			
		}

		else if($rs['product_category']=="mens shuits")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens t-shirts</option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			</select><br><br>
	
			<?php
			
		}

		else if($rs['product_category']=="womens kurties")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens t-shirts</option>
			<option>mens shuits</option>
			</select><br><br>
			
			<?php

		}

		else if($rs['product_category']=="womens saree")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>womens kurties</option>
			<option>womens dress</option>
			<option>womens jeans</option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens t-shirts</option>
			<option>mens shuits</option>
			</select><br><br>

			<?php 

		}

		else if($rs['product_category']=="womens dress")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens jeans</option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens t-shirts</option>
			<option>mens shuits</option>
			</select><br><br>

			<?php 

		}

		else if($rs['product_category']=="womens jeans")
		{

		?>
		
			<select name="cat">
	
			<option><?php echo $rs['product_category'];?></option>
			<option>womens kurties</option>
			<option>womens saree</option>
			<option>womens dress</option>
			<option>mens shirts</option>
			<option>mens kurtas</option>
			<option>mens jeans</option>
			<option>mens t-shirts</option>
			<option>mens shuits</option>
			</select><br><br>

			<?php 

		}

		?>
		
			


		ENTER QUANTITY: <input type="number" value='<?php echo $rs['product_quantity']; ?>' min="0" max="10" name="qty"><br><br>
     <button type="submit" name="submit" class="btn btn-primary" >Update</button><br>
      </form><br>
         </div>


<?php
if(isset($_POST['submit']))
{
$target_dir="uploads/";
@$target_file=$target_dir.$_FILES["file1"]["name"];	
$product_id=$_GET["id"];
$product_name=$_POST['name'];
$product_discription=$_POST['dis'];
$product_img= $_FILES['file1']['name'];
$product_category=$_POST['cat'];
$product_quantity=$_POST['qty'];


	$query1="update product set product_name='$product_name',product_discription='$product_discription',product_img='$product_img',product_quantity='$product_quantity',product_category='$product_category' where product_id='$product_id'";
	$ans=mysqli_query($conn,$query1);


		if($ans>0)
		{
			move_uploaded_file($_FILES["file1"]["tmp_name"],$target_file);
			echo "<script language='javascript'>alert('UPLOAD Successfull!!!')</script>";
			echo "<script language='javascript'>window.location.href='Disp_Product.php' </script>";
		}
		else
		{
			echo "<script language='javascript'>alert('Some problem')</script>";
		}
}

?>

<!-- </table> -->
</div>
</div>
</div>
</div>
</section>

</body>
<br>
<br>
<br>

<?php
include("footer.php");
?>