<?php
session_start();

include 'header.php';
include 'connection.php';
$_SESSION['count'] = 0;

?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<section id="contact-page">
        <div class="container">
            <div class="center">        
                <center><h1>View Cart</h1></center><br>
            </div> 
            
                
					<?php
					if(isset($_REQUEST['msg']))
					{
						echo $_REQUEST['msg'];
					}
					?>                    
					<div class="contact">
					<table class="responstable" border="1px" height="100%" width="100%">
							<tr align="center" style="background-color:#000066; color:white; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px;">
								<td>No</td>
								<td>Date</td>
								<td>Product Name</td>
								<td>Price</td>
								<td>Image</td>
								<td>Product Type</td>
                                <td>Quantity</td>
								<td>Size</td>
                                <td>Total Amount</td>
								<td>Action</td>
							</tr>
						<?php
						$q="select * from tmp_addtocart where uno=".$_SESSION['uno'];
						$r=mysqli_query($conn,$q) or die("error");
						$c=mysqli_num_rows($r);
						$c1=0;
						$tot=0;
						while($row=mysqli_fetch_array($r))
						{
							$c1++;
							@$_SESSION['count']=$c1;
						?>
						
						<tr align="center">
								<td><?php echo $c1;?></td>
								<td><?php echo $row[1];?></td>
								<td><?php echo $row[3];?></td>
								<td align="right">rs.&nbsp;<?php echo $row[4];?></td>
								<td align="center"><img src="admin/<?php echo $row[5];?>" width="100px" height="100px"></td>
								<td><?php echo $row[6];?></td>
                                <td><?php echo $row[9];?></td>
								<td><?php echo $row[10];?></td>
								<td>rs.&nbsp;<?php echo $row[11];$tot=$tot+$row[11];?></td>
								<td><a href="deletecart.php?pno=<?php echo $row[0];?>">Delete</a></td>
							</tr>
						
						<?php
						}
						?>
						
						<tr align="center" >
								<td colspan="8">Total Amount:</td>
								<td>rs.&nbsp;<?php echo $tot;?></td>
								<td colspan="6">&nbsp;</td>
						</tr>
						<tr>
								<td colspan="10" style="text-align: center;"><button style="margin-right: 10%;"><a href='index.php'>Continue Shopping</a></button>
								<button><a href='finaladdtocart.php'> Submit Final Order</a></button></td>

						</tr>
						</table>


					</div>
                    <div id="errormessage" style="height:200px; "></div>

                </div>
            <!--/.row-->
        <!--/.container-->
    </section>
    

<?php
include("footer.php");
?>


