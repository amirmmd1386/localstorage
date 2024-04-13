<?php
$link = mysqli_connect("localhost", "root", "", "localstorage_dbl");
$userName = $_GET['username'];
$Password = $_GET['password'];
$fname = $_GET['fname'];
$id = $_GET['id'];
$query1 = "update users
set username = '$userName', password = '$Password',fname= '$fname' 
WHERE userid = '$id'";
mysqli_query($link, $query1);
mysqli_close($link);
echo "<script>window.location.replace('index.php')</script>";
?>