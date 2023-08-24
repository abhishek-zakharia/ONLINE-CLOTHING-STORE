<?php
session_start();
include 'header.php';
include 'connection.php';

if(isset($_SESSION['user_email']))
{
    if(isset($_GET['id']))
    {   
        $id=$_GET['id'];
        $qry="select * from drop_down where cat_id=$id";
		$rs=mysqli_query($conn,$qry);
        $row=mysqli_fetch_array($rs);
        $cat_name=$row['cat_name']." ".$row['sub_cat'];
    }   
}
else
{
    echo "<script language='javascript'>window.location.href='login.php'</script>";
}
?>
<form name="f1" method="post">
<!--blog-starts-->
	<!--product-starts-->
	<br><br>
	<center><h1></h1></center>
	<div class="product" id="product">
		<div class="container">
			<div class="product-top">
				
				<div class="col-md-100 product-right heading">
					<div class="prdt"><br><br>
					<?php
					    $query1 = "select * from product where product_category='$cat_name'";
					    $data1=mysqli_query($conn,$query1);
						while($row1=mysqli_fetch_array($data1))
						{
					?>
						<div class="col-md-4 prdt-left" style="border-radius: 5px;border: solid 1px; display: flex;  width: 340px; margin: 20px;  justify-content: space-around; flex-direction: column; ">
							<a href="ViewDetail.php?product_id=<?php echo $row1[0];?>"><img src="admin/<?php echo $row1[2];?>" alt=""  style="border-width:1px; padding: 1px;margin: 4%;" a link></a>
							<p style=" color:red; font-family:Verdana, Arial, Helvetica, sans-serif; font-weight: bold; text-align: center; font-size:1em; padding-left:7px;" ><?php echo $row1[1];?></p>
							<br>
							<p style=" color:black; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px;" >price: <?php echo "rs.".$row1[3];?></p>
							<br>
							<!-- <p style="color:black; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px;" ><?php ?></p> -->
							
							
						</div>
					<?php
						}
			 		?>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--product-end-->
	
<input type="hidden" name="product1" value="" />


</form>

<br>
<br>
<br>
<br>
<br>
<br>



<?php
include("footer.php");
?>