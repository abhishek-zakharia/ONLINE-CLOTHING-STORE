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
                <center><h1>About Us</h1></center><br>
            </div> 
            <div class="row contact-wrap"> 
                <div class="col-sm-8 col-sm-offset-2">
                    
                    <div id="errormessage"></div>
                    <form action="" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="uname" tabindex="1" class="form-control" id="name"  placeholder="Name"  />
                            <div class="validation"></div>
                        </div>
                        
                        <div class="form-group">
                        <textarea name="detail" rows="10" tabindex="2" class="form-control" placeholder="Detail" ></textarea>
                            <div class="validation"></div>
                        </div>
                        
                            <div class="text-center"><button type="submit" tabindex="3" class="btn btn-primary btn-lg" name="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <button type="reset"  class="btn btn-primary btn-lg" name="submit">Clear</button></div><br>
                        
                        
                    </form>     
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>






<?php


@$name=$_POST["uname"];
@$detail=$_POST["detail"];


if(isset($_POST['submit']))
{
    $qry="insert into about values('','$name','$detail')";
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


     <center><table class="responstable">

	       <?php
								

								$row=mysqli_query($conn,"select * from about");
								echo "<tr>
										<th>ID</th>
										<th>NAME</th>
										<th>DETAIL</th>
										<th>UPDATE</th>
										<th>DELETE</th>
                                        
										";
								while($rs=mysqli_fetch_array($row))
								{   
									echo "<tr>";
									echo "<td>".$rs['id'];							
									echo "<td><center><font face='comic sans' size='5'>".$rs['name']."</font></center>";
									echo "<td><p>".$rs['detail']."</p>";
									echo "<td><a href='aboutus_update.php?id=".$rs['id']."'>UPDATE</a>";
									echo "<td><a href='aboutus_delete.php?id=".$rs['id']."'>DELETE</a>";
									echo "</tr>";
										
								}
					?>
</table>
</center>
<br><br><br><br><br>

<?php
include("footer.php");
?>
	