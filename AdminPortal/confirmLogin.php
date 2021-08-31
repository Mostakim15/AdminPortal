<?php
session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    
    $rowcount = mysqli_num_rows($result);
    if($rowcount >= 1){
        
        $_SESSION['login']=true;
        $_SESSION['s_msg'] = "successfullu logged in.";
        header("location: index.php");
    }
    else{
        $_SESSION['error']=true;
        header("location: login.php");
    }

?>