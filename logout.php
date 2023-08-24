<?php



session_start();

if(isset($_SESSION['user_email']))
{

    session_unset();
    session_destroy();
	header("location:login.php?msg=Signout...");
    die();
}
else
{
    
	header("location:index.php?msg=Signout...");
    die();
}






	
?>