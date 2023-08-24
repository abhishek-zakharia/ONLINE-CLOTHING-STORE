<?php
include("connection.php");
include("header.php");

if(isset($_SESSION["email"]))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='AdminLogin.php'</script>";
}
?>

?>


<head>

    <link href="css/table.css" rel="stylesheet">
</head> 

	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <center><h1>Contact Us</h1></center><br>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    
                    <div id="errormessage"></div>
                    <form action="" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" tabindex="1" class="form-control" id="name"  placeholder="Name"  />
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="email" tabindex="2" class="form-control" id="name"  placeholder="Email"  />
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" tabindex="3" class="form-control" id="name"  placeholder="Phone Number"  />
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="add" tabindex="4" class="form-control" id="name"  placeholder="Address"  />
                            <div class="validation"></div>
                        </div>

                            <div class="text-center"><button type="submit" tabindex="5" class="btn btn-primary btn-lg" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <button type="reset"  class="btn btn-primary btn-lg" name="submit">Clear</button></div><br>
                        
                    </form>     
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>

<?php


@$name=$_POST["name"];
@$email=$_POST["email"];
@$phone=$_POST["phone"];
@$adress=$_POST["add"];


if(isset($_POST['submit']))
{
    $qry="insert into contact_us values('','$name','$email','$phone','$adress')";
    $ans=mysqli_query($conn,$qry);
    
    if($ans>0)
    { 
    echo"<script>alert('done')</script>";
    }
    
    else
    {
            echo"";
    }
}
?>
<center>
<table class="responstable">

	       <?php
								

            $row=mysqli_query($conn,"select * from contact_us");
            echo "<tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADRESS</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>";
            while($rs=mysqli_fetch_array($row))
            {   
                echo "<tr>";
                echo "<td>".$rs['id'];							
                echo "<td>".$rs['name']."</td>";
                echo "<td>".$rs['email']."</td>";
                echo "<td>".$rs['phone']."</td>";
                echo "<td>".$rs['adress']."</td>";
                
                echo "<td><a href='contactus_update.php?id=".$rs['id']."'>UPDATE</a>";
                echo "<td><a href='contactus_delete.php?id=".$rs['id']."'>DELETE</a>";
                echo "</tr>";
                    
            }
		    ?>
</table>
</center>
<br><br><br><br><br>

<?php
include("footer.php");
?>
	