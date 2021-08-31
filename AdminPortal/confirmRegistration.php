<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password != $confirm_password){
        session_start();
        $_SESSION['error_msg']=" Password didn't match";
        header("location: registration.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');

    $sql1 = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql1);
    $rowcount = mysqli_num_rows($result);

    if($rowcount >= 1){
        $_SESSION['error_msg']=" Account already exist.";
        header("location: registration.php");
    }
    else{
    $sql = "INSERT INTO users VALUES (NULL, '$name', '$email', '$confirm_password')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['reg_msg']=" Registration successful.";
        header("location: login.php");
    }
}