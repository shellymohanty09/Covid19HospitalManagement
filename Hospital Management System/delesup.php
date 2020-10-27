<?php
include 'connect.php';
$id=$_REQUEST['id'];
$query = "DELETE FROM `sup_admin` WHERE `sadid`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: deletesupad.php");
error_reporting(0);
?>
