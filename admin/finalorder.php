<?php
include("connection.php");
include("header.php");
?>
<head>
<link href="css/table.css" rel="stylesheet">
</head> 

<?php
    
    $query="select count(*) from finalorder";
    $resultSet=mysqli_query($conn,$query);
    $row=mysqli_fetch_row($resultSet);
?>    

  <center> 
  <h1><font color="black">Customer's Orders</font></h1><br>
  <form action="finalorder.php" method="POST">
        <!-- <input type="text" name="search"> -->
    <!-- <input type="submit" value="search" name="search1"> -->
    <table class="responstable">
         
<table border="1px" class="responstable">
        <tr>
            
            <th>ID</th>
            <th>DATE</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>USER NO</th>
            <th>USER NAME</th>
            <th>IMAGE</th>
            <th>ADDRESS</th>
            <th>DELETE</th>
        </tr>
  <?php
        if(isset($_POST['search1']))
        {
            $search=$_POST['search'];
            $query="select * from finalorder where uname='$search'";
            $resultSet=mysqli_query($conn,$query);
            
        }
        else{
        $query="select *from finalorder";
        $resultSet=mysqli_query($conn,$query);
        }
        while($row=mysqli_fetch_array($resultSet))
        {
            echo"<tr>";
            
            echo"<td>".$row[2]."</td>";
            echo"<td>".$row[1]."</td>";
            echo"<td>".$row[10]."</td>";
            echo"<td>rs.".$row[4]."</td>";
            echo"<td>".$row[7]."</td>";
            echo"<td>".$row[8]."</td>";
            echo"<td>"."<img src='$row[5]' height='100' width='100'>"."</td>";
            echo"<td>".$row[9]."</td>";
            echo"<td>"."<button><a href='finalorderdel.php?id=".$row['id']."' name='delete'>Delete</button></a>"."</td>";
          
            echo"</tr>";
        }
    ?>
    </table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php

include("footer.php");
?>

