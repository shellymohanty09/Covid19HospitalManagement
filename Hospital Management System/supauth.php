
<?php
session_start();
if(!isset($_SESSION["ssadmun"])){
header("Location: index.php");
exit(); }
error_reporting(0);
?>
