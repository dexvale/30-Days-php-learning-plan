<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="day12.php" method="get">
        <label for="search">Search Inters</label>
        <input type="text" id="search" name="student_query">
        <button type="submit">Search</button>
    </form>

<hr>

<form action="submit_application,php" method="post">

</form>

</body>
</html>

<?php 

if(isset($_GET['student_query'])){
    $searchterm = $_GET['student_query'];
    echo "<p>You seatch for: {$searchterm}.</p>";
}

?>