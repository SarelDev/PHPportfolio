<?php
session_start();

$_SESSION = array();

session_destroy();

header("location: /omniservices/views/login.php");
exit();
?>
