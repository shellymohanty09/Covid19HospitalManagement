
<?php
session_start();
if( (!isset($_SESSION["sadmun"])) && (!isset($_SESSION["admty"])) )
{
header("Location: index.php");
exit(); }
error_reporting(0);
?>
