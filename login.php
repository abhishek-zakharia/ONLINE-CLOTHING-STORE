<?php
session_start();
include 'header.php';
include 'connection.php';




if (isset($_POST['submit'])) 
{
  $name=$_POST['user_email'];
  $pass=$_POST['user_password'];

  $q="select * from registration where user_email='$name' && user_password='$pass'";
  
  $select=mysqli_query($conn,$q);
  $s=mysqli_fetch_row($select);
  //print_r($s);
  //exit;
  if ($s>0) 
  {
    // $_SESSION['is_login']=true;
    $_SESSION['user_email']=$name;
    $_SESSION['uno']=$s[0];
    $_SESSION['uname']=$s[1];
    $_SESSION['count']=null;
    echo "<script language='javascript'>window.location.href='index.php'</script>";
  }
else
{
    echo '<script>alert("Login Not Successfully")</script>';
    
}
}

?>
<!-- <script type="text/javascript"> 
function su(){location.replace("registration.php");} 
</script> -->
<br><br><br><br>


<section id="contact-page">
        <div class="container">
            <div class="center">        
                <center><h1>Login Form</h1></center><br>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-4 col-sm-offset-4">
                    <div id="errormessage"></div>
                    <form action="" method="POST" class="contactForm">
                        <div class="form-group">
                          Email : 
                            <input type="text" name="user_email" class="form-control" id="name" tabindex="1" placeholder="Email Adress" required="" />
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                        Password :
                        <input type="password" name="user_password" class="form-control" id="pass" tabindex="2" placeholder="Password" required="" />
                            <div class="validation"></div>
                        </div>
                         
                        <br><br>            
                                 <div class="text-center">
                                     <button type="submit" tabindex="3" class="btn btn-primary btn-lg" name="submit">
                                         Login
                                     </button>&nbsp;&nbsp;
                                     <button type="submit" tabindex="4" class="btn btn-primary btn-lg" name="clear">Clear</button></div><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                 
                                     <center><a href="registration.php">Don't have an account? Register here..</a></center>
                                    
                                </div>
                                </form>
                                     
                                 
                        <br>
                        
                            
                        
        

                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>

<br><br><br><br><br>   

<?php
include("footer.php");
?>


