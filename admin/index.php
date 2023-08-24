<?php

@session_start();
include 'connection.php';
include 'header.php';
include 'footer.php';

if(isset($_SESSION["email"]))
{
    echo "<script language='javascript'>window.location.href='RegistarationView.php'</script>";
}
else
{
    echo "<script language='javascript'>window.location.href='AdminLogin.php'</script>";
}

?>