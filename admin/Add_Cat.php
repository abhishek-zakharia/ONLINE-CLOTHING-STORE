<?php
session_start();
include 'header.php';
include 'connection.php';

if(isset($_SESSION["email"]))
{
    
}
else
{
    echo "<script language='javascript'>window.location.href='AdminLogin.php'</script>";
}
?>


<br>
<br>
<br>


<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
   
</div>
</div>
<!-- banner -->
<section id="contact-page">
        <div class="container">
            <div class="center">        
                <center><h1>Add Category</h1></center><br>
            </div> 
  

<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
    <form id="f1" action="Add_Cat.php" method="post" enctype="multipart/form-data"><br>
    SELECT CATEGORY: &nbsp;&nbsp;&nbsp;<input type="radio" id="men" name="mcat" tabindex="1" value="Mens" required>
    <label for="html">Men's Wear</label>
    <input type="radio" id="women" name="mcat" tabindex="2" value="Womens">
    <label for="css">Women's Wear</label><br><br>
  
    ADD CATEGORY: <input type="text" class="form-control" tabindex="3" placeholder="Category Name" name="name" required><br>
        
     <button type="submit" class="btn btn-primary" tabindex="4" name="submit">Submit</button><br>
      </form><br>
         </div>


<?php 



if(isset($_POST['submit']))
{



        $mcat=$_POST["mcat"];
    
        $name=$_POST["name"];
    
        $qry="select sub_cat from drop_down where cat_name='$mcat'";
        $rs=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_array($rs))
        {
            if($name==$row['sub_cat'])
            {
                echo "<script>alert('Category allready addead.')</script>";
                die();
           
            }
        }
        
        $query="insert into `drop_down`(`cat_name`,`sub_cat`)values('$mcat','$name')";
        //print_r($query);
		$ans=mysqli_query($conn,$query);
    
    
    if($ans>0)
    {
        echo "<script>alert('Item Added Successfully')</script>";
        die();
    }
    else
    {
        echo "<script>alert('Not Successfull')</script>";      
    }
        
}  
?>

</div>
</div>
</div>
</div>
</section>
<center><table class="responstable" border="1px">

<?php
                     

                     $row=mysqli_query($conn,"select * from drop_down");
                     echo "<tr>
                             <th>ID</th>
                             <th>CATEGORY NAME</th>
                             <th>DELETE</th>
                             ";
                     while($rs=mysqli_fetch_array($row))
                     {   
                         echo "<tr>";
                         echo "<td>".$rs['cat_id'];							
                         echo "<td><center><font face='comic sans' size='5'>".$rs['cat_name']." ".$rs['sub_cat']."</font></center>";
                         echo "<td><a href='cat_del.php?id=".$rs['cat_id']."'>DELETE</a>";
                         echo "</tr>";
                             
                     }
         ?>
</table>
</center>


<br>
<br>


<?php
include("footer.php");
?>
