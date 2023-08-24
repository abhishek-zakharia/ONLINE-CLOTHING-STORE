<?php
@session_start();

include 'connection.php';
include 'header.php';
include 'silder.php';

if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br><br>
<div class="product" id="product">
    <div class="container">
        <div class="product-top">
            <b><h1>&nbsp;&nbsp;Men's Wear</h1></b>
            <div class="col-md-100 product-right heading">
                <div class="prdt"><br><br>
                <h2>&nbsp;&nbsp;T-shirts</h2>
                <?php
					    $query1 = "select * from product where product_category='mens t-shirts' limit 3";
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
                </div>
		</div>
	</div>

    <div class="product" id="product">
    <div class="container">
        <div class="product-top">
            <div class="col-md-100 product-right heading">
            
                <div class="prdt"><br><br>
                <h2>&nbsp;&nbsp;shirts</h2>
                <?php
					    $query1 = "select * from product where product_category='mens shirts' limit 3";
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
                </div>
		</div>
	</div><hr style="border: 1px solid black;">


    <div class="product" id="product">
    <div class="container">
        <div class="product-top">
            <b><h1>&nbsp;&nbsp;Women's Wear</h1></b>
            <div class="col-md-100 product-right heading">
                <div class="prdt"><br><br>
                <h2>&nbsp;&nbsp;Saree</h2>
                <?php
					    $query1 = "select * from product where product_category='womens saree' limit 3";
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
                </div>
		</div>
	</div>

    <div class="product" id="product">
    <div class="container">
        <div class="product-top">
            <div class="col-md-100 product-right heading">
            
                <div class="prdt"><br><br>
                <h2>&nbsp;&nbsp;dress</h2>
                <?php
					    $query1 = "select * from product where product_category='womens dress' limit 3";
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
	
					</div>
					<?php
						}
			 		?>
						
						<div class="clearfix"></div>
					</div>
				</div>
                </div>
		</div>
	</div>


</body>
</html>
<?php
include 'footer.php';
?>