<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts School of Witchcraft and Wizardry</title>
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
            margin-bottom: 20px;;
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

        .join-us {
            margin-top: 50px;
            padding: 30px;
            background-color: #34495e; /* Dark gray for the join-us section */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .school-logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 2.5em;
            color: #d35400; /* Pumpkin orange */
            margin-bottom: 15px;
        }

        /* Hogwarts castle image */
        body::before {
            content: "";
            background: url('./assets/hogwarts-school-facts.jpg') no-repeat center center fixed;
            background-size: cover;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.2; /* Adjust the opacity as needed */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Welcome to Hogwarts School of Witchcraft and Wizardry</h2>
        <p>Click the button below to begin your magical journey:</p>
        <a href="register.php" class="btn btn-primary">Enroll Now</a>
        <p>Wanna take a look registered student?</p>
        <a href="registered.php" class="btn btn-primary">Registered User</a>
    </div>

    <div class="container join-us">
        <img src="./assets/Hogwartscrest.webp" alt="Hogwarts Logo" class="school-logo">
        <h3>Join Us at Hogwarts!</h3>
        <p>Experience the magic of quality education and a mystical environment.</p>
        <a href="register.php" class="btn btn-primary">Join Now</a>
    </div>

</body>

</html>
