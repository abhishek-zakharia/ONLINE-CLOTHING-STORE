<?php
session_start();
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


<br>
<br>
<br>


<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
   
</div>
</div>
<!-- banner -->
<section id="contact-page">
        <div class="container">
            <div class="center">        
                <center><h1>Add Product</h1></center><br>
            </div> 
  

<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
      <form id="f1" action="AddProduct.php" method="post" enctype="multipart/form-data">
        Add product: <input type="text" class="form-control" placeholder="Full Name" name="name"><br>
        IMAGES<input type="file" name="file1"/><br>
        PRICE: <input type="text" class="form-control" name="price"/><br>
        DISCRIPTION<textarea class="form-control" name="dis" rows="5" required=""></textarea><br>
        SELECT CATEGORY  
        <select name="cat">
          <?php
        $qry="select* from drop_down";
        $rs=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_array($rs))
        {?>
                <option><?php echo $row['cat_name']; echo " ".$row['sub_cat']; ?></option>
           <?php
          
        }
       
       ?>

    </select><br><br>

        ENTER QUANTITY: <input type="number" size="5%" min="0" name="qty"><br><br>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
      </form><br>
         </div>


<?php 

$target_dir="uploads/";
@$target_file=$target_dir.$_FILES["file1"]["name"];	
@$name=$_POST["name"];
@$img=$_POST["file1"];
@$price=$_POST["price"];
@$dis=$_POST["dis"];
@$cat=$_POST["cat"];
@$qty=$_POST["qty"];

   
if(isset($_POST['submit']))
{
    $query="insert into product(product_name, product_img, product_price,product_discription, product_category, product_quantity) values('$name','$target_file','$price','$dis','$cat','$qty')";
		
	$ans=mysqli_query($conn,$query);
	    

    if($ans>0)
		{
        move_uploaded_file($_FILES["file1"]["tmp_name"],$target_file);
	      echo "<script>alert('Item Added Successfully')</script>";
        die();
    }
    else
    {
        echo "<script>alert('Not Successfull')</script>";      
    }
}  
?>

  
</div>
</div>
</div>
</div>
</section>

<br>
<br>
<br>
<br>


<?php
include("footer.php");
?>
