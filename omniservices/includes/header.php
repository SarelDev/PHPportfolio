
<header>
    <h1>Welcome<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo " ".$_SESSION["username"];
} else {
    echo "!";
}
?> to OmniServices</h1>
</header>

