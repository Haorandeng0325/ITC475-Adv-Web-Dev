<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Contact Agent</title>
    <style>
      .biaodan input{
        margin-bottom: 8px;
      }

      .biaodan{
        margin-left: 30px;
        
      }
      table{
        text-align: center;
        margin: 10px 0;
        height: 70px;
        width: 470px;
        
      }
      /* .row{
        margin-bottom: 5px;
      } */
      /* .submitbtn{
        float: left;
        margin-top: -150px;
      } */
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
             <a href="./About Us.php"><span>About Us</span></a>
             <a href="#"><span>Contact Agent</span></a>
          </div>
          </div>
          </div>
        
           <!-- 简介 intro-->
        <div class="row">
            <div class="col-12">
          <div class="intro">
            <br><br>
              <h2>Contact an Agent </h2>
              <p>We would love to know more about your travel plans. Please fill this contact form to get in touch with a travel agent. </p>
             
          </div> 
            </div>    
          </div> 
          
        <!-- 表单 -->
        <div class="row">
          <div class="col-s-12 col-12">
        <div class="biaodan">
          <form action="confirm.php" method="post">
          <!-- 输入框 -->
          First Name:<input type="text" class="fname in" name="firstname"> <br>
          Last Name:<input type="text" class="lname in" name="lastname"> <br>
          Email Address:<input type="text" class="email in" style="width: 150px;" name="emailaddress"> <br>
          Phone Number:<input type="text" name="phonenumber" maxlength="11" onkeyup="this.value=this.value.replace(/[^\d]/g,'') " class="phone in" style="width: 148px;"> <br>
          Number of Adults:<input type="number" min="1" max="30"class="num in" style="width: 130px;" name="numberoftadults"> <br>
          Number of Children:<input type="number" min="1" max="30"class="num in" style="width: 120px;" name="numberofchildren"> <br>
          Travel Date:<input type="date" min="2022-10-19" class="date in" name="traveldate" required> <br>
        
          Select Destination:
          <select class="list" name="dest" id="" onclick="select_event(this.options[this.selectedIndex].value);" style="width: 125px;">
            <option value="ydlselect" selected>Venice, Italy</option>
            <option value="xxlselect">New Zealand</option>
            <option value="medfselect">Maldives, South Asia</option>
            <option value="mxgselect">Cancun, Mexico</option>
        </select>
        <!-- 意大利 -->
            <div class="list" id="ydl1" style="width: 500px;height: 110px;">
                <table border="1">
                    <tr>
                    <th>City</th>
                    <th>Activities</th>
                    </tr>
                    <tr>
                        <td>Venice, Italy</td>
                        <td>Museums, Theatre, Parks and Recreation, City Tours</td>
                    </tr>
                    </table>
                    Venice, Italy: <input type="checkbox" name="intrested[]" value="Museums">Museums 
                    <input type="checkbox" name="intrested[]" value="Theatre">Theatre
                     <input type="checkbox" name="intrested[]" value="Parks and Recreation">Parks and Recreation
                      <input type="checkbox" name="intrested[]" value="City Tours">City Tours
            </div>
            <!-- 新西兰 -->
            <div class="list" id="xxl1" style="width: 500px;height: 110px; display: none">
                <table border="1">
                    <tr>
                    <th>City</th>
                    <th>Activities</th>
                    </tr>
                    <tr>
                        <td>New Zealand</td>
                        <td>City Tours, Sports, Cycling, Museums, Boating</td>
                    </tr>
                    </table>
                    New Zealand: <input type="checkbox" name="intrested[]" value="City Tours">City Tours
                    <input type="checkbox" name="intrested[]" value="Sports ">Sports 
                    <input type="checkbox" name="intrested[]" value="Cycling "> Cycling 
                    <input type="checkbox" name="intrested[]" value="Museums ">Museums 
                    <input type="checkbox" name="intrested[]" value="Boating"> Boating
                </table>
            </div>
        
            <!-- 马尔代夫 -->
            <div class="list" id="medf1" style="width: 500px;height: 110px; display: none">
                <table border="1">
                    <tr>
                    <th>City</th>
                    <th>Activities</th>
                    </tr>
                    <tr>
                        <td>Maldives, South Asia</td>
                        <td>Museums, Sailing, Beach, Hiking, Boating</td>
                    </tr>
                    </table>
                    Maldives, South Asia: <input type="checkbox" name="intrested[]" value="Sailing">Sailing 
                    <input type="checkbox" name="intrested[]" value="Beach ">Beach 
                    <input type="checkbox" name="intrested[]" value="Hiking "> Hiking 
                    <input type="checkbox" name="intrested[]" value="Museums ">Museums 
                    <input type="checkbox" name="intrested[]" value="Boating"> Boating
            </div>
        
            <!-- 墨西哥 -->
            <div class="list" id="mxg1" style="width: 500px;height: 110px; display: none">
                <table border="1">
                    <tr>
                    <th>City</th>
                    <th>Activities</th>
                    </tr>
                    <tr>
                        <td>Cancun</td>
                        <td> Parks and Recreation, Beaches, Boating, Snorkeling</td>
                    </tr>
                    </table>
                    Cancun: <input type="checkbox" name="intrested[]" value="Parks and Recreation">Parks and Recreation
                     <input type="checkbox" name="intrested[]" value="Beaches">Beaches 
                     <input type="checkbox" name="intrested[]" value="Snorkeling"> Snorkeling 
                     <input type="checkbox" name="intrested[]" value="Boating"> Boating
                    </div>
                    <!-- 这个是两个按钮 -->
            <input type="submit" class="submitbtn">
            <input type="reset" class="resetbtn">
            </form>
            </div>
            </div>
            </div>

            
            
          
          <!-- 版权 footer  -->
          <div class="footer">
            <h3>Copyright Protected All rights reserved</h3>
            <p>MEGA TRAVELS </p> <p> mega@travels.com </p>
          </div>  

          <script src="./JavaScript/Selector.js"></script>
</body>
</html>