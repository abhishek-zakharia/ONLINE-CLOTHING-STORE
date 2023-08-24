<?php
include 'connection.php';
include 'header.php';
?>

<?php

$product_id=$_REQUEST["product_id"];
if(isset($product_id)) 
{
    // $poduct_id = preg_replace('/[^-a-zA-Z0-9_]/','', $_GET['product_id']);
    $query = "select * from product where product_id=".$product_id;    
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
}

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
//     $product_quantity = $_POST['product_quantity'];
//     $addCart = $ct->addToCart($product_quantity, $proId);
// }
?>
<?php 
// $cmrId = Session::get("cmrId");
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])) {
//     $productId = $_POST['productId'];
//     $insertCom = $pd->insertCompareDara($productId, $cmrId);
//}
?>
<?php 
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wlist'])) {
//     $saveWlist = $pd->saveWishListData($proId, $cmrId);
// }
?>

<!DOCTYPE html>
<html>
	<head>
		
	<style type="text/css">
		
	.mybutton{widows: 100px; float:left; margin-right: 30px;}
	
	</style>
	</head>
<body>
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="cont-desc span_1_of_2">
				<?php 
                // $getPd = $pd->getSingleProduct($proId);
                // if ($getPd) {
					//     while ($result = $getPd->fetch_assoc()) {
                        ?>

						
				<div class="grid images_3_of_2 col-md-4 prdt-left" style=" display: flex; height: 500px; width: 355px; margin-left: 20px; margin-bottom: 15px; width: 650; justify-content: space-around; flex-direction: column;">
					<img src="admin/<?php echo $row['product_img']; ?>" align='left' alt="" /></div>
				
				<div class="desc span_3_of_2">
					<p style="padding: 10px;font-size: 1.5em;margin-top: 40px; color:black; font-family:Verdana, Arial, Helvetica, sans-serif; font-weight: bold; "><?php echo $row['product_name']; ?></font></p>
					
					<div class="price">
						<p style="font-size: 1.5em;font-weight: bold; margin-top: 10px;">&nbsp;Price: <span><?php echo "rs.".$row['product_price']; ?></span></p>
						<!-- <p style="font-size: 1.5em;margin-top: 10px;">Category: <span><?php  ?></span></p> -->
						<!-- <p>Brand:<span><?php //echo $result['brandName']; ?></span></p> -->
					</div>
					<div class="add-cart">
						<form method="POST">
						<p style="font-size: 1.5em;margin-top: 10px;font-weight: bold;">&nbsp;Quantity:<input type="number" name="qty" style="width: 80px;" class="buyfield"  min="1" value="1"/></p><br>
						<input type="hidden" value='<?php echo $row['product_id']; ?>' name="pid"/>
						<input type="hidden" value='<?php echo $row['product_name']; ?>' name="pname"/>
						<input type="hidden" value='<?php echo $row['product_price']; ?>' name="pprice"/>
						<p style="font-size: 1.5em;margin-top: 10px;font-weight: bold;">&nbsp;SIZE:
						
							<select name="cat1">

							<option>XS</option>
							<option>XL</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							</select><br><br> 

							<?php
								if($row['product_quantity']>0)
								{
									?>
									<h4 style="color: green; font-size: 1.5em;margin-top: 10px;font-weight: bold; ">Availe Stock - <?php echo $row['product_quantity']; ?></h4><br><br>
									<input type="submit" name="AddCart" class="buysubmit" formaction="InsertCart.php" value="Add To Cart"/>
									<input type="submit" name="plcordr" class="buysubmit" formaction="insorder.php" value="Place Order"/>

									<?php
								}
								else
								{
									?>
										<h2 style="color: red; font-size: 1.5em;margin-top: 10px;font-weight: bold;">Stock Is Not Available!</h2>

									<?php

								}
						?>
						<!-- <input type="submit" name="Buy" class="buysubmit" name="submit" value="Buy Now"/>&nbsp;&nbsp;&nbsp; -->
						
					</form>
					</div>
					</div>
					<?php 
                    // if(isset($minProAlert)) 
                    // {
                    //         echo $minProAlert;
                    // } 
                    // ?>
					<!-- <span style="color:red; font-size:18px;"> -->
						<?php 
                        // if (isset($addCart)) {
                        //     echo $addCart;
                        // } 
                        ?>
					<!-- </span> -->
					<?php 
                    // if (isset($insertCom)) {
                    //         echo $insertCom;
                    //     }
                    //     if (isset($saveWlist)) {
                    //         echo $saveWlist;
                    //     } 
                    //     ?>
                        <?php 
                        // $login = session::get("cuslogin");
                        // if ($login == true) {
                        //     ?>

<?php
                    //    } ?>					
				</div>
				<div class="product-desc">
					<h2 style="background-color: lightgreen;margin-left: 30px;margin-bottom: 20px; width: 50%;">Product Details</h2>
					<p style="margin-left: 30px; width: 50%;"><?php echo $row['product_discription']; ?></p>
				</div>
				
				<?php
                    //}
					//} ?>
			</div>
			
		</div>
	</div>

</body>
</html>
<br>
<br>

<?php
include 'footer.php';
?>