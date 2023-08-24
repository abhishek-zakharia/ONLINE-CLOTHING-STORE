<?php
session_start();
include("connection.php");
include("header.php");
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<section id="contact-page">
        <div class="container">
            <div class="center"><br>        
                <center><h1>Profile Details</h1></center><br>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
					<?php
					if(isset($_REQUEST['msg']))
					{
						echo $_REQUEST['msg'];
					}
					?>                    
					<div style="font-size: 25px;" class="contact">
						<?php
						$q="select * from registration where user_email='".$_SESSION['user_email']."'";
						$r=mysqli_query($conn,$q) or die("error");
						$c=mysqli_num_rows($r);
						if($c>=1)
						{
							$row=mysqli_fetch_array($r);
						}
						?>
						<a href="editprofile.php">Edit Profile</a><br><br>
						<br><br>
						<label>Name:&nbsp;<?php echo $row[1];?></label><br>
						<label>Mobile:&nbsp;<?php echo $row[4];?></label><br>
						<label>Email:&nbsp;<?php echo $row[2];?></label><br>
						<label>Address:&nbsp;<?php echo $row[5];?></label><br>																

					</div>
                    <div id="errormessage" style="height:200px; "></div>

                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    

<?php
include("footer.php");
?>