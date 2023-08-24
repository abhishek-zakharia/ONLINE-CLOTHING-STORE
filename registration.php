<?php
session_start();
include 'header.php';
include 'connection.php';
?>

<br>
<br><br><br><br>


	
        <div class="container">
            <div class="center">        
                <center><h1>Registration form</h1></center><br>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    
                    <div id="errormessage"></div>
                    <form action="" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                        ENTER YOUR NAME<input type="text" name="user_name" class="form-control" id="name" tabindex="1" required="" placeholder="Your Name"  /><br>
                            <div class="validation"></div>
                        </div>
                        ENTER YOUR PASSWORD
                        <div class="form-group">
                        <input type="password" name="user_password" class="form-control" id="pass" tabindex="2" placeholder="Password" required="" />
                            <div class="validation"></div>
                        </div>
                        
                        <br>
                        ENTER YOUR CONTACT NUMBER 
                        <div class="form-group">
                              <input type="number" class="form-control" name="user_contect" id="uph" tabindex="3" placeholder="Phone Number" required="" />
                            <div class="validation"></div>
                        </div><br>
                        ENTER YOUR EMAIL
                         <div class="form-group">
                          
                             <input type="email" class="form-control" name="user_email" id="uemail" tabindex="4" placeholder="Your Email" required="" />
                            <div class="validation"></div>
                        </div>
                         <br>
                        ENTER YOUR ADDRESS
                        <div class="form-group">
                            <textarea class="form-control" name="user_address" rows="5" tabindex="5" required="" placeholder="Enter Address" ></textarea>
                            <div class="validation"></div>
                        </div>              
                        <br>
                               <div class="text-center"><button type="submit" class="btn btn-primary btn-lg" tabindex="6" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                           </form>
                       </div>
                   </div>
               </div>
           </section>
          
          


<br>
<br><br><br><br>


<?php

if(isset($_POST['submit']))
{

    
@$user_name=$_POST["user_name"];
@$user_email=$_POST["user_email"];
@$user_password=$_POST["user_password"];
@$user_contect=$_POST["user_contect"];
@$user_address=$_POST["user_address"];




    $query="insert into registration (user_name,user_email,user_password,user_contect,
    user_address) values('$user_name','$user_email','$user_password','$user_contect',
    '$user_address')";
    
    $ans=mysqli_query($conn,$query);
    
    if($ans>0)
    {
        $_SESSION['user_email']=$user_email;
        echo "<script>alert('Registration successfull')</script>";
        echo "<script language='javascript'>window.location.href='welcom.php'</script>";
    }
    else
    {
         echo "<script>alert('Registration Unsuccessfull')</script>";      
    }
}
?>

  

<?php
include 'footer.php';
?>