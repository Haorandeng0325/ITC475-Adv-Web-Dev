

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <style>
      
        .intro .confirmnews p{
            margin-bottom: 20px;
            margin-left:12px;
        }
        .intro .saying{
            margin-bottom: 80px;
        }
       .intro .un{
        margin-bottom: 10px;
       }
       .intro .pw{
        margin-bottom: 10px;
       }
       .intro form{
        text-align:center;
        font-size:20px;
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
  <h2>Login Page</h2>
 
    <p class="saying"><i>Welcome to the Mega Travel login page!</i></p>
    <div class="confirmnews">
    <form action="loginaction.php" method="post" >
    Username:<input type="text" class="un" name="username" required> <br>
    Password:&nbsp<input type="password" class="pw" name="pwd" required> <br>
    <input type="submit" style="width: 260px">
    
    </form>
    
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