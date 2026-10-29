<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>

<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php

$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];
$age        = $_POST["age"];
$species    = $_POST["species"];
$food       = $_POST["food"];
$partysize  = $_POST["partysize"];

// Convert species code to name
switch($species)
{
    case "M":
        $species = "Human";
        break;

    case "D":
        $species = "Dwarf";
        break;

    case "E":
        $species = "Elf";
        break;

    case "H":
        $species = "Hobbit";
        break;
}

$tour = "";

if(isset($_POST["accom"]))
{
    $tour .= "Accommodation";
}

if(isset($_POST["4day"]))
{
    if($tour != "")
        $tour .= " and ";

    $tour .= "4 Day Tour";
}

if(isset($_POST["10day"]))
{
    if($tour != "")
        $tour .= " and ";

    $tour .= "10 Day Tour";
}

echo "<p>Welcome <strong>$firstname $lastname</strong>!</p>";

echo "<p>You are now booked on the <strong>$tour</strong>.</p>";

echo "<p>Species: $species</p>";

echo "<p>Age: $age</p>";

echo "<p>Meal Preference: $food</p>";

echo "<p>Number of travellers: $partysize</p>";

?>

</body>

</html>