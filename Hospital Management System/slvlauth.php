
<?php
session_start();
if(!isset($_SESSION["topadun"])){
header("Location: index.php");
exit(); }
error_reporting(0);
?>
