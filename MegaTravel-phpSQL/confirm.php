<?php

require("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Page</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <style>
       
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
  <div>
  <h2>Confirm Page</h2>
 
    <p class="saying"><i>Thank you for submitting your travel agent contact request! Here is the information you submitted:</i></p>
    <div class="confirmnews">
    <?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['emailaddress'];
$phonenumber = $_POST['phonenumber'];
$numberoftadults = $_POST['numberoftadults'];
$traveldate = $_POST['traveldate'];
$dest = $_POST['dest'];
$intrested = $_POST['intrested'];
$numberofchildren = $_POST['numberofchildren'];
$clientName = $firstname .' '. $lastname;
$interstedStr = implode(",", $intrested);

$sql = "INSERT INTO `contact` (`ClientName`, `ClientPhoneNumber`, `ClientEmail`, `NumberofAdults`, `NumberofChildren`, `Destination`, `TravelDates`, `InterestedActivities`) VALUES ('$clientName', '$phonenumber', '$emailaddress', '$numberoftadults', '$numberofchildren', '$dest', '$traveldate', '$interstedStr');";

$result = mysqli_query($conn, $sql);
    
if ($result) {
  echo '<p>Client Name:'.$clientName .'</p>';
  echo '<p>Client Phone Number:'.$phonenumber.'</p>';
  echo '<p>Client Email:'.$emailaddress.'</p>';
  echo '<p>Number of Adults:'.$numberoftadults.'</p>';
  echo '<p>Number of Children:'.$numberofchildren.'</p>';
  echo '<p>Destination:'.$dest.'</p>';
  echo '<p>Travel Dates:'.$traveldate.'</p>';
  echo '<p>Interested Activities:'.$interstedStr.'</p>';
  echo '<p><b>An agent will be in touch with you soon!<b></p>';
} else {
  echo '写入数据 请联系admin';
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