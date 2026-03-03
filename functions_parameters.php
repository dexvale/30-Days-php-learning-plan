<?php

function printSystemHeader()
{
    echo "<h2>Intership Appplication and Tracking System</h2>";
    echo "<hr>";
}

function calculatRemainingHours($tartgetHours, $copmpletedHours)
{
    $remaining = $tartgetHours - $copmpletedHours;

    if ($remaining < 0) {
        echo "<p>Status: Intership Completed</p>";
    } else {
        echo "<p>Hours remaing to complete: {$remaining} hours</p>";
    }
}
function showdata()
{
    echo "<b>Juan Dela Cruz:</b>";
    calculatRemainingHours(300, 150);
    echo "<b>Juan Dela Cruz:</b>";
    calculatRemainingHours(300, 300);
    // Capture the returned data in a variable
$juanStatus = getApplicationStatus(false, false);

// Now you can use that data wherever you want in your HTML
echo "<span class='badge'>" . $juanStatus . "</span>";
// Output: <span class='badge'>Pending Final Decision</span>
}
function getApplicationStatus($isApproved, $isInterviewed)
{
    // Evaluate the parameters and return a string
    if ($isApproved) {
        return "Approved";
    } elseif ($isInterviewed) {
        return "Pending Final Decision";
    } else {
        return "Under Initial Review";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    printSystemHeader();
    showdata();
    ?>

</body>

</html>