<?php
include("header.php");
include("connection.php");
//include("clientmenu.php");


if(isset($_GET['id']))
{

	$id=$_GET['id'];
	$q6="delete from finalorder where id=".$id;
	$r6=mysqli_query($conn,$q6) or die("could not get data from the database table");
}

?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<section id="contact-page">
                <center><h1>Placed Order List</h1></center><br>
             
            
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
                                <td>Quantity</td>
                                <td>Size</td>
                                
                                <td>Image</td>
                                <td>Total Amount</td>
								<td>Delevery Address</td>
                                <td>Action</td>
                                

							</tr>
						<?php
						$q="select * from finalorder where uno=".$_SESSION['uno'];
						$r=mysqli_query($conn,$q) or die("error");
						$c=mysqli_num_rows($r);
						$c1=0;
						$tot=0;
						while($row=mysqli_fetch_array($r))
						{
							$c1++;
						?>
						<tr align="center">
								<td><?php echo $c1;?></td>
								<td><?php echo $row[1];?></td>
								<td><?php echo $row[3];?></td>
								<td align="right">rs.&nbsp;<?php echo $row[4];?></td>
                                <td><?php echo $row[10];?></td>
                                <td><?php echo $row[11];?></td>

							
								<td align="center"><img src="admin/<?php echo $row[5];?>" width="100px" height="100px"></td>
								
                            	<td>rs.&nbsp;<?php echo $row[12];$tot=$tot+$row[12];?></td>
								<td><?php echo $row[9];?></td>
								<td><a href="placedorder.php?id=<?php echo $row[2]; ?>">Delete</a></td>

							</tr>
						
						<?php
						}
						?>
						<tr align="center" >
								<td colspan="7" style="text-align: center;">Total Amount:</td>
								<td>rs.&nbsp;<?php echo $tot;?></td>
								<td colspan="5">&nbsp;</td>
						</tr>

						</table>


					</div>
                    <div id="errormessage" style="height:200px; "></div>

                </div>
            <!--/.container-->
    </section>
    

<?php
include("footer.php");
?>
