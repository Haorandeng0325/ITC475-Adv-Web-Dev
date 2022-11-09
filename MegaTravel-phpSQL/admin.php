<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('location: login.php');
}
// var_dump($_POST);
require("conn.php");
$sql = "select * from contact";
$result = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <style>
        .intro{
            height:600px;
        }
        .intro .confirmnews p{
            margin-bottom: 20px;
            margin-left:12px;
        }
        .intro .saying{
            margin-bottom: 80px;
        }

    </style>
</head>
<body>
        <!-- 头部 -->
  <div class="header">
    <img src="./images/mega travel logo.png" width="300px" height="150px" alt="">
   
  </div>
  
  <!-- 导航 -->
  <div class="row">
    <div class="col-s-12 col-12">
      <div class="nav">
        <a href="./index.php"><span>Home</span></a>
        <a href="#"><span>About Us</span></a>
        <a href="./Contact Agent.php"><span>Contact Agent</span></a>
      </div>
    </div>
  </div>
 <!-- 简介 intro-->
  <div class="row">
    <div class="col-12">
      <div class="">
        <h2>Admin Page</h2>
 
        <p class="saying"><i>This is the administrative information:</i></p>
        <div class="confirmnews">
          <?php
          if ($result) {
        

              while($row = mysqli_fetch_array($result)) {
                echo '<p>Client Name:'. $row['ClientName'].'</p>';
                echo '<p>Client Phone Number:'. $row['ClientPhoneNumber'].'</p>';
                echo '<p>Client Email:'. $row['ClientEmail'].'</p>';
                echo '<p>Number of Adults:'. $row['NumberofAdults'].'</p>';
                echo '<p>Number of Children:'. $row['NumberofChildren'].'</p>';
                echo '<p>Destination:'. $row['Destination'].'</p>';
                echo '<p>Travel Dates:'. $row['TravelDates'].'</p>';
                echo '<p>Interested Activities:'. $row['InterestedActivities'].'</p>';
                echo '<br />';
              }  
            }
          ?>
        </div>
      </div> 
    </div>    
  </div> 
  <!-- 版权 footer  -->
  <div class="footer">
    <h3>Copyright Protected All rights reserved</h3>
    <p>MEGA TRAVELS </p> <p> mega@travels.com </p>
  </div>
</body>
</html>