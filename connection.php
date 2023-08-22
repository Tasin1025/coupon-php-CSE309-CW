<?php 
$url = "localhost";
$username = "root";
$password = "";
$dbname = "coupons"
$conn = mysqli_connect($url, $username, $password,$dbname);

if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}

?>