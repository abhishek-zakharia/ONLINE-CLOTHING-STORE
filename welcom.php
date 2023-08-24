<?php
session_start();
include 'header.php';
include 'connection.php';
// include 'clientmenu.php';
?>
<br>
<br><br><br><br><br><br>
<?php
if(isset($_SESSION['user_email']))
{
    echo "<center><b><font face='comic sans' size='6'>Welcome...<br>".$_SESSION['user_email']."</font></b></center>";
    die();
}
else
{
    echo "<script language='javascript'>window.location.href='login.php' </script>";
    
}
?>
<html>
<br><br><br><br>
<section id="contact-page">
    <div class="container">
        <div class="center">        
            <center><h1>Welcome to Client Panel</h1></center><br>
        </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    <?php
                    if(isset($_REQUEST['msg']))
                    {
                        echo $_REQUEST['msg'];
                    }
                    ?>                    
                    <div id="errormessage" style="height:200px; "></div>
                    
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    
    <br><br>
  
    
<?php
include("footer.php");
?>

