<?php
$con = mysqli_connect('localhost', 'root', '', 'quizlogin');

if (isset($_POST['sb'])) {
    $username = $_POST['username'];
    $email = $_POST['mail'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user1 (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $execute = mysqli_query($con, $query);

    if ($execute) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>