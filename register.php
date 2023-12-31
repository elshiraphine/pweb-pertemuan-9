<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts Admission - Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
    <style>
        body {
            background-color: #2c3e50; /* Hogwarts blue */
            color: #ecf0f1; /* Light gray text */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #d35400; /* Pumpkin orange */
        }

        form {
            background-color: #34495e; /* Dark gray for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label {
            color: #d35400; /* Pumpkin orange */
        }

        .btn-primary {
            background-color: #d35400; /* Pumpkin orange */
            border-color: #d35400;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background-color: #a04000; /* Darker orange on hover */
            border-color: #a04000;
        }

        /* Customize dropdown */
        select.form-control {
            background-color: #2c3e50; /* Hogwarts blue */
            color: #ecf0f1; /* Light gray text */
        }

        /* Datepicker */
        .datepicker {
            background-color: #2c3e50; /* Hogwarts blue */
            color: #ecf0f1; /* Light gray text */
        }

        .datepicker-dropdown {
            background-color: #34495e; /* Dark gray for the datepicker dropdown */
            border: 1px solid #2c3e50; /* Hogwarts blue border */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Hogwarts Admission Registration Form</h2>
        <form action="process_registration.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" class="form-control datepicker" id="dob" name="dob" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="previousSchool">Previous School:</label>
                <input type="text" class="form-control" id="previousSchool" name="previousSchool" required>
            </div>

            <div class="form-group">
                <label for="class">Class:</label>
                <select class="form-control" id="class" name="class" required>
                    <option value="Science">Science</option>
                    <option value="Social Science">Social Science</option>
                    <option value="Language">Language</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" minlength="8" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
</body>

</html>
