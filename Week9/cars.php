<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cars</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f5f5f5;
}

table{
    border-collapse:collapse;
    width:80%;
    margin:auto;
}

th,td{
    border:1px solid black;
    padding:10px;
    text-align:center;
}

th{
    background:#4CAF50;
    color:white;
}

h1{
    text-align:center;
}

</style>

</head>

<body>

<h1>Used Cars</h1>

<?php

require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<h3>Unable to connect to the database.</h3>";
    echo "<p>Please check your database settings and try again.</p>";
} else {

    $query = "SELECT * FROM cars";
    $result = mysqli_query($conn, $query);

    mysqli_close($conn);
}

$query = "SELECT * FROM cars";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

    echo "<table>";

    echo "<tr>";
    echo "<th>Car ID</th>";
    echo "<th>Make</th>";
    echo "<th>Model</th>";
    echo "<th>Price</th>";
    echo "<th>Year of Manufacture</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>";
        echo "<td>".$row['car_id']."</td>";
        echo "<td>".$row['make']."</td>";
        echo "<td>".$row['model']."</td>";
        echo "<td>$".$row['price']."</td>";
        echo "<td>".$row['yom']."</td>";
        echo "</tr>";

    }

    echo "</table>";

}
else{

    echo "<p style='text-align:center;'>There are no cars to display.</p>";

}

mysqli_close($conn);

?>

</body>
</html>