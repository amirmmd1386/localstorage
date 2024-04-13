<?php
 $link = mysqli_connect("localhost", "root", "", "localstorage_dbl");
 $id = $_GET['id'];
 $query1 = "dELETE FROM users WHERE userid =$id";
 $resualt = mysqli_query($link, $query1);
 echo "<script>window.location.replace('index.html')</script>";
?>