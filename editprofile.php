<?php
session_start();
include("connection.php");
include("header.php");
//include("clientmenu.php");
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

					<?php
					if(isset($_REQUEST['msg']))
					{
						echo $_REQUEST['msg'];
					}
						$q="select * from registration where user_email='".$_SESSION['user_email']."'";
						$r=mysqli_query($conn,$q) or die("error");
						$c=mysqli_num_rows($r);
						if($c>=1)
						{
							$row=mysqli_fetch_array($r);
						}
					?>                    
                    <section id="contact-page">
                    <div class="container">
                    <div class="center">        
                        <center><h1>Edit Profile</h1></center><br>
                    </div> <br>
                        <div class="row contact-wrap"> 
                            <div class="col-sm-4 col-sm-offset-4">
                                <div id="errormessage"></div>

                        <div class="contact">
						 <form action="editprofile.php" style="border: 1px black;" method="POST" class="contactForm">
                    </div>
        
                         <div class="form-group">
                        Enter Name:<input type="text" name="uname" class="form-control" id="name" tabindex="1" required placeholder="Your Name" value="<?php echo  $row[1]; ?>" /><br>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                        Enter Password:<input type="password" name="upass" class="form-control" id="pass" tabindex="2" placeholder="Password" value="<?php echo  $row[3];?>" />
                            <div class="validation"></div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                              Enter Mobile No:<input type="number" class="form-control" name="uph" id="uph" placeholder="Phone Number" value="<?php echo  $row[4];?>"/>
                            <div class="validation"></div>
                        </div>
                        
                         <div class="form-group">
                          
                             Enter Email:<input type="email" class="form-control" name="uemail" id="uemail" placeholder="Your Email" value="<?php echo  $row[2];?>"/>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                            Enter Address:<textarea class="form-control" name="uaddr" rows="5" required="" placeholder="Address"><?php echo  $row[5];?></textarea>
                            <div class="validation"></div>
                        </div>
                        
                         <div class="text-center"><button type="submit"  class="btn btn-primary btn-lg" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <button type="reset"  class="btn btn-primary btn-lg" name="submit">Clear</button></div><br>
                    </form>   															

					</div>
                    <div id="errormessage" style="height:200px; "></div>

                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    
<?php
if(isset($_POST['submit']))
{
        $a=$_POST["uname"];
        $b=$_POST["upass"];
        $c=$_POST["uph"];
        $f=$_POST["uaddr"];
        $user_email=$_SESSION["user_email"];
        $q="update registration set user_name='$a', user_password='$b', user_contect='$c',user_address='$f' where user_email='$user_email'";
        $r=mysqli_query($conn,$q) or die("error");
        header("location:profile.php?msg=Profile Updated Successfully...");
}
?>

<?php
include("footer.php");
?>



