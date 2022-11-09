<?php
session_start();
require("conn.php");

 $username = $_POST['username'];
 $pwd = $_POST['pwd'];
 $sql="SELECT * from admin where username='$username' and password= '$pwd'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_NUM);

  if (!is_null($row)) {
   
    $_SESSION['admin'] = $username;
    header('location: admin.php');
  } else {
    die('Incorrect username or password');
  }

?>