<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applicant Tracker</title>
    <style>
        /* Modern CSS separating design from structure */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Removes the ugly double borders */
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd; /* Clean bottom line for rows */
        }
        th {
            background-color: #f4f4f4; /* Light gray header */
            color: #333;
        }
        /* A special CSS class just for pending statuses */
        .status-pending {
            color: #d97706; /* Dark orange */
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Pending Applications to Review</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Department</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            // Your multidimensional array of data
            $applications = [
                [
                    "name" => "Juan Dela Cruz",
                    "student_id" => "2024-0012",
                    "department" => "IT",
                    "status" => "Pending"
                ],
                [
                    "name" => "Maria Santos",
                    "student_id" => "2024-0015",
                    "department" => "HR",
                    "status" => "Approved"
                ],
                [
                    "name" => "Pedro Reyes",
                    "student_id" => "2024-0021",
                    "department" => "Finance",
                    "status" => "Pending" // Added another pending intern
                ]
            ];

            // THE LOOP
            foreach ($applications as $applicant) { 
                
                // THE FILTER: Check if the status is exactly "Pending"
                // If it is NOT pending, PHP skips the HTML inside and moves to the next applicant.
              //  if ($applicant["status"] === "Pending") { 
            ?>
                
                <tr>
                    <td><?php echo $applicant["name"]; ?></td>
                    <td><?php echo $applicant["student_id"]; ?></td>
                    <td><?php echo $applicant["department"]; ?></td>
                    <td class="status-pending"><?php echo $applicant["status"]; ?></td>
                </tr>

            <?php 
                //} // Closes the IF statement
            } // Closes the FOREACH loop 
            ?>

        </tbody>
    </table>

</body>
</html>