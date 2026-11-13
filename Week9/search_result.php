<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Disable MySQL exceptions 
mysqli_report(MYSQLI_REPORT_OFF);

require_once("settings.php");

// Connect to database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    echo "<h2>Database Connection Failed</h2>";
    echo "<p>Sorry, we are unable to connect to the database.</p>";
    exit();
}

// Check if user entered a model
if (isset($_GET['model']) && !empty(trim($_GET['model']))) {

    $model = mysqli_real_escape_string($conn, trim($_GET['model']));

    // kiem loi cars --> carsss
    $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // SQL error
    if ($result === false) {

        echo "<h2>Oops!</h2>";
        echo "<p>Something went wrong while searching for cars.</p>";
        echo "<p>Please try again later.</p>";

    }
    // Records found
    elseif (mysqli_num_rows($result) > 0) {

        echo "<h2>Search Results</h2>";

        echo "<table border='1' cellpadding='10'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Make</th>";
        echo "<th>Model</th>";
        echo "<th>Price</th>";
        echo "<th>Year</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";

        }

        echo "</table>";

    }
    // No matching record
    else {

        echo "<h2>No Matching Cars Found</h2>";
        echo "<p>Please try another car model.</p>";

    }

} else {

    echo "<h2>Search Required</h2>";
    echo "<p>Please enter a car model before searching.</p>";

}

mysqli_close($conn);

?>