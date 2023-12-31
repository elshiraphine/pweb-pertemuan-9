<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO register (name, email, gender, address, dob, previous_school, class, password, photo) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($stmt, 'ssssssiss', $name, $email, $gender, $address, $dob, $previousSchool, $classId, $hashedPassword, $photoPath);

    if ($_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
            $photoPath = $uploadFile;
        } else {
            $photoPath = '';
        }
    } else {
        $photoPath = '';
    }

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    mysqli_close($connection);

    if ($result) {
        session_start();
        $_SESSION['registration_success'] = true;
        header('Location: landing.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($connection);
    }
} else {
    header('Location: register.php');
    exit();
}
?>
