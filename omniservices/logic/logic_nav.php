<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/nav.php";
} else {
    include $_SERVER['DOCUMENT_ROOT']."/omniservices/includes/nav_default.php";
}
?>
