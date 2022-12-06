<?php
$conn = mysqli_connect('127.0.0.1', 'root', '');
if (mysqli_connect_error() != null) {
  die(mysqli_connect_error());
} 
mysqli_select_db($conn, 'racedata');
mysqli_set_charset($conn, 'utf8');
?>