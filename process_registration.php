<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $previousSchool = $_POST['previousSchool'];
    $class = $_POST['class'];
    $password = $_POST['password'];

    $classMapping = [
        'Science' => 1,
        'Social Science' => 2,
        'Language' => 3
    ];

    $classId = array_key_exists($class, $classMapping) ? $classMapping[$class] : 1;

    $query = "INSERT INTO register (name, email, gender, address, dob, previous_school, class, password) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($stmt, 'ssssssis', $name, $email, $gender, $address, $dob, $previousSchool, $class, $password);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        session_start();
        $_SESSION['registration_success'] = true;
        
        header('Location: landing.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }

    mysqli_stmt_close($stmt);

    mysqli_close($connection);
} else {
    header('Location: register.php');
    exit();
}
?>
