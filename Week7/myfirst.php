<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Using PHP Variables, Arrays and If Statements</title>
</head>

<body>

    <h1>PHP Variables, Arrays and If Statements</h1>

    <?php
        // Declare and initialise array
        $marks = array(85, 85, 95);

        // Modify the second element
        $marks[1] = 90;

        // Calculate average
        $ave = array_sum($marks) / count($marks);

        // Determine pass or fail
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }
    ?>

    <p>The average score is <?php echo $ave; ?>.</p>

    <p>You <?php echo $status; ?>.</p>

</body>

</html>