<?php
$con = mysqli_connect('127.0.0.1:3306','root','','arduino');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>