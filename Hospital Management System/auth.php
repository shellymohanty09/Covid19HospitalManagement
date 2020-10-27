
<?php
session_start();
if(!isset($_SESSION["sadmun"])){
header("Location: supadm.php");
exit(); }
error_reporting(0);
?>
