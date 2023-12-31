<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
            font-size: 3em;
            margin-bottom: 20px;
            color: #d35400; /* Pumpkin orange */
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #d35400; /* Pumpkin orange */
            border-color: #d35400;
        }

        .btn-primary:hover {
            background-color: #a04000; /* Darker orange on hover */
            border-color: #a04000;
        }

        .login-prompt {
            margin-top: 50px;
            padding: 30px;
            background-color: #34495e; /* Dark gray for the login prompt section */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .login-form {
            max-width: 400px;
            margin: auto;
        }

        .login-form input {
            margin-bottom: 15px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php
            session_start();
            if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
                echo 'alert("Registration successful! Welcome to Hogwarts!");';
                $_SESSION['registration_success'] = false;
            }
            ?>
        });
    </script>
</head>

<body>

    <div class="container">
        <h2>Welcome to Hogwarts School of Witchcraft and Wizardry</h2>
        <p>Please log in to continue your magical journey:</p>
    </div>

    <div class="container login-prompt">
        <form class="login-form" action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>

</body>

</html>
