<?php
session_start();
include 'header.php';
include 'connection.php';
// include 'clientmenu.php';
if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='Login.php'</script>";
}
?>
		
<div class="contact">
		<div class="container">
			<div class="contact-top heading">
            <center><h1>Contact Us</h1></center>
			</div>
            <br><br>
			<div class="contact-bottom">
				<div class="col-md-4 ">
						<div class="add">	
                        <?php
                            
                            $row=mysqli_query($conn,"select * from contact_us");
                            while($rs=mysqli_fetch_array($row))
				            {   	
				                echo "<font face='comic sans' size='6'>".$rs['name']."</font><hr>";
								echo "<p align='justify'><font face='comic sans' size='4'>Email: ".$rs['email']."</font></p>";
                                echo "<p align='justify'><font face='comic sans' size='4'>Telephone No: ".$rs['phone']."</font></p>";
                                echo "<p align='justify'><font face='comic sans' size='4'>Address: ".$rs['adress']."</font></p>";
                            }
                        ?>					
						
                        
                        
                        </div>
					</div>
				</div>
				<div class="col-md-8 contact-right">
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>



<br><br><br><br><br><br><br><br>

  
    
<?php
include("footer.php");
?>

