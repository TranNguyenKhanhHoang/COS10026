<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

include("header.inc");
?>

<h1>Welcome</h1>

<p>
    Hello <strong><?php echo $_SESSION["user"]; ?></strong>
</p>

<p>
    Your Token:
    <strong><?php echo $_SESSION["token"]; ?></strong>
</p>

<?php
include("footer.inc");
?>