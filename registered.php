<?php
// Include your database connection file
include('connection.php');

// Fetch registered users from the database
$query = "SELECT name, gender, previous_school, class, photo FROM register";
$result = mysqli_query($connection, $query);

// Check for errors in the query
if (!$result) {
    echo 'Error: ' . mysqli_error($connection);
    exit();
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #2c3e50;
            /* Hogwarts blue */
            color: #ecf0f1;
            /* Light gray text */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #34495e;
            /* Dark gray for the table */
            color: #ecf0f1;
            /* Light gray text for table content */
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #2c3e50;
            /* Slightly lighter than the background color */
            text-align: left;
        }

        th {
            background-color: #d35400;
            /* Pumpkin orange for table header */
        }

        tr:nth-child(even) {
            background-color: #2c3e50;
            /* Slightly darker than the background color for even rows */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Registered Users</h2>

        <table>
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Previous School</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';

                    // echo '<pre>';
                    // print_r($row);
                    // echo '</pre>';

                    // echo '<td>Photo Path: ' . $row['photo'] . '</td>';

                    if (isset($row['photo']) && !empty($row['photo'])) {
                        echo '<td><img src="' . $row['photo'] . '" alt="User Photo" width="100"></td>';
                    } else {
                        echo '<td>No Photo</td>';
                    }
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['previous_school'] . '</td>';
                    echo '<td>' . getClassLabel($row['class']) . '</td>';
                    echo '</tr>';
                }

                function getClassLabel($classValue)
                {
                    switch ($classValue) {
                        case 1:
                            return 'Social';
                        case 2:
                            return 'Social Science';
                        case 3:
                            return 'Language';
                        default:
                            return 'Unknown';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>