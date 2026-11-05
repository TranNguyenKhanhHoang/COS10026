<?php
session_start();
?>

<?php include("header.inc"); ?>

<h1>Login Form</h1>

<?php
if (isset($_SESSION["error"])) {
    echo "<p style='color:red;'>" . $_SESSION["error"] . "</p>";
    unset($_SESSION["error"]);
}
?>

<form action="process.php" method="post">

    <p>
        Username:
        <input type="text" name="username" required>
    </p>

    <p>
        Password:
        <input type="password" name="password" required>
    </p>

    <!-- Hidden Field -->
    <input type="hidden" name="token" value="H16042005">

    <input type="submit" value="Login">

</form>

<?php include("footer.inc"); ?>