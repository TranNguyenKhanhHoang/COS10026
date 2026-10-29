<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Variables, Arrays and Operators</title>
</head>

<body>

<h1>PHP Variables, Arrays and Operators</h1>

<?php

// English days
$days = array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
);

echo "<p>The days of the week in English are:</p>";
echo implode(", ", $days);

// French days
$days = array(
    "Dimanche",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);

echo "<br><br>";

echo "<p>The days of the week in French are:</p>";
echo implode(", ", $days);

?>

</body>

</html>