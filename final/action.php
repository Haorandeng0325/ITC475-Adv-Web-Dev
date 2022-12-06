<?php
header("Access-Control-Allow-Origin: *");
require('conn.php');
$winner = $_POST['winner'];

$sql = "insert into matches(winner, date) values('$winner', now())";
mysqli_query($conn, $sql);
echo 'insert success';
?>