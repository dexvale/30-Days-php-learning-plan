<?php
echo "<strong>Normal array</strong><br>";
    // Creating an indexed array of departments
    $departments = ["IT Department", "HR Department", "Finance", "Marketing"];

    // Accessing data: We use the numeric index inside square brackets
    // Remember, counting always starts at 0!
    echo "The first department is: " . $departments[0] . "<br>"; 
    echo "The third department is: " . $departments[2] . "<br>";

    // Adding a new item to the end of the array
    $departments[] = "Operations"; 
    echo "The third department is: " . $departments[4] . "<br>";
?>

<?php 

echo "<br>";
echo "<strong>Associative array</strong><br>"
?>
<?php
    // Creating an associative array using "key" => "value" pairs
    $applicant = [
        "name" => "Juan Dela Cruz",
        "student_id" => "2024-0012",
        "status" => "Pending Review",
        "applied_role" => "Software Engineering Intern"
    ];

    // Accessing data: We use the named string key inside square brackets
    echo "Applicant Name: " . $applicant["name"] . "<br>";
    echo "Application Status: " . $applicant["status"] . "<br>";

    // Updating a value in the array
    $applicant["status"] = "Approved";
?>