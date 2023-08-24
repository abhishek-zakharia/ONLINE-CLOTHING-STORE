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

<center> 
	<br>
	<form action="Disp_Product.php" method="POST">
    <!-- <input type="text" name="search">
    <input type="submit" value="search" name="search1"><br><br> -->
        <select tabindex="1" name="cat">
		<option>All</option>
        <?php
        $qry="select* from drop_down";
        $rs=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_array($rs))
        {
			?>
                <option><?php echo $row['cat_name']; echo " ".$row['sub_cat']; ?></option>
           <?php
          
        }
       ?>
    </select> &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" tabindex="2" class="btn btn-primary" value="Filter" name="filter"><br><br>
    <table class="responstable" class="responsive" border="1px" height="100%" width="100%">
         
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMAGE</th>
            <th>DISCRIPTION</th>
			<th>PRICE</th>
            <th>QUANTITY</th>
			<th>CATEGORY</th>

            <th>DELETE</th>
            <th>EDIT</th>
       
        </tr>

    
    
<?php
    if(isset($_POST['cat']))
    {
		$cat=$_POST['cat'];

		if($cat=="All")
		{
			$query="select * from product";
        	$resultSet=mysqli_query($conn,$query);
		}
		else
		{
           $query="select * from product where product_category='$cat'";
           $resultSet=mysqli_query($conn,$query);
		}
	}
    else
	{
    	$query="select * from product";
        $resultSet=mysqli_query($conn,$query);
	}
        while($row=mysqli_fetch_array($resultSet))
        {
            echo"<tr>";
            echo"<td>".$row[0]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>"."<img src='$row[2]' align='center' height='200' width='200'>"."</td>";
			echo"<td>".$row[4]."</td>";
            echo"<td>rs.".$row[3]."</td>";
			echo"<td>".$row[6]."</td>";
			echo "<td>".$row[5]."</td>";
            echo "<td><a href=Del_Product.php?id=".$row[0].">Delete</a></td>";
            echo "<td><a href=Update_Product.php?id=".$row[0].">Edit</a></td>";
            echo"</tr>";
        }
    ?>
    </table>

<!-- <form name="f1" method="post">
<!--blog-starts-->
	<!--product-starts--><br>
	<!-- <br><br>
	<center><h1></h1></center>
	<div class="product" id="product">
		<div class="container">
			<div class="product-top">
				
				<div class="col-md-100 product-right heading">
					<div class="prdt" ><br><br><br> --> 
					<?php
					//     $query1 = "select * from shirts where product_category='mens shirts'";
					//     $data1=mysqli_query($conn,$query1);
					// 	while($row1=mysqli_fetch_array($data1))
					// 	{
					// ?>
						<!-- <div class="col-md-4 prdt-left" style="border: solid 1px;border-radius: 6px; display: flex; height: 500px; width: 355px; margin-left: 20px; margin-bottom: 15px; width: 650; justify-content: space-around; flex-direction: column;">
						
							<img src="<?php //echo $row1[2]; ?>" alt=""  style="border-width:1px; margin-bottom: 10px; margin-top: 10px; display: flex; justify-content: center;" a link>
							
							<p style="background-color:#003399; margin-bottom: 10px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px;" ><?php echo $row1[1];?></p>
							
							<p style="background-color:#003399; margin-bottom: 10px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px;" >price:<?php echo $row1[3];?></p>
							 -->
							<!-- <p style="background-color:#003399; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px;" ><a href="cafedis.php?cafe_id=<?php echo $row1[0];?>" style="align:center; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:1em; padding-left:7px;">VIEW DETAILS</a></p><br><br> -->
							<!-- <div class="ed" style="margin-bottom: 10px;">
							<button style="background-color:#003399; margin-right: 10px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px; width: 45%;">
							<a style="color: white;" href="Update_Product.php?id=<?php  ?>">Edit</a></button>
							<button style="background-color:#003399; margin-left: 10px; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; text-align: center; font-size:1em; padding-left:7px; width: 47%;">
							<a style="color: white;" href="Del_Product.php?id=<?php  ?>">Delete</a></button></div>
						</div> -->
					<?php

						// }
			 		?>
						
						<!-- <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div> -->
	<!--product-end-->
	
<!-- <input type="hidden" name="product1" value="" />


</form> -->

<br>
<br>
<br>
<br>

<?php
include("footer.php");
?>