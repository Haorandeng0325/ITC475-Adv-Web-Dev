<?php


require("conn.php");
$sql = "select * from matches order by id desc limit 5";

$result = mysqli_query($conn, $sql);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race Record</title>
    <link rel="stylesheet" href="css/index.css">
   
</head>
<body>

<!-- header  -->
<div class="header">
        <div class="wordH">
            <p style="font-size: 26px;"><strong>Welcome to Disney© Cars Racing Game!<strong></p>
            <a href="index.html" style="color: maroon;">Game Index</a>
        </div>

<?php
          if ($result) {
        

              while($row = mysqli_fetch_array($result)) {
                echo '<p>winner:'. $row['winner'].'</p>';
                echo '<p>date:'. $row['date'].'</p>';
             
                echo '<br />';
              }  
            }
          ?>
</body>


</html>