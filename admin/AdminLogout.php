<?php



session_start();


if(isset($_SESSION['email']))
{

    session_unset();
    session_destroy();
	header("location:AdminLogin.php?msg=Signout...");
    die();
}
else
{
    
	header("location:index.php?msg=Signout...");
    die();
}

?>