<?php
include("connection.php");
include("header.php");
if(isset($_SESSION['user_email']))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='Login.php'</script>";
}
?>


<div class="about">
		<div class="container">
			<div class="about-top heading">
				<center><h1>About Us</h1></center>
			</div>
			<div class="about-bottom">				
			
				<div class="col-md-12 about">
		  <?php
                            
                            $row=mysqli_query($conn,"select * from about");
                            while($rs=mysqli_fetch_array($row))
				            {   	
				                echo "<br><p> <font face='comic sans' size='10'>".$rs['name']."</font><p><hr>";
								echo "<p align='justify'><font face='comic sans' size='4'>".$rs['detail']."</font></p><hr>";		
				            }
                        ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<br><br><br><br>

<?php
include("footer.php");
?>
