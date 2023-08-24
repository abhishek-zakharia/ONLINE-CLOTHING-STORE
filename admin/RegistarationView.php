<?php
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

<html>
    <head>
        <link href="css/table.css" rel="stylesheet">
    </head>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  align-self: center;
  align-content: center;

}
</style>

</html>
<br>
<br>
<body>
<center>
        
        <h1><font color="black">Registered Customers</font></h1></center><br>
       <div class="img"><br>
       <table align="center" class="responstable">
        
        <tr> 
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>CONTECT NO</th>
          	<th>ADDRESS</th>
            <!-- <th>DELETE</th> -->
        </tr>

        
    
    <?php
        $query="select * from registration";
        $resultSet=mysqli_query($conn,$query);
        
        while($row=mysqli_fetch_row($resultSet))
        {
            echo"<tr>";
            echo"<td align=center>".$row[0]."</td>";
            echo"<td align=center>".$row[1]."</td>";
            echo"<td align=center>".$row[2]."</td>";
            echo"<td align=center>".$row[3]."</td>";
            echo"<td align=center>".$row[4]."</td>";
            echo"<td align=center>".$row[5]."</td>";
            
            //echo "<td><a href='reg_update.php?stu_id=".$row[0]."'>UPDATE</a>";

            // echo "<td><a href='Reg_Del.php?id=".$row[0]."'>DELETE</a>";
                                
            echo"</tr>";
        }
    ?>
    </table>
    </div>
   
</body>
<br>
<br>
<br>
<br>

<?php
include("footer.php");
?>