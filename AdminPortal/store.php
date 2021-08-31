<?php 
    session_start();
    if(!isset($_SESSION['login'])){
      header("location: home.php");
        die();
    }
    

    $name = $_POST['name'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    $cell = $_POST['cell'];

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "INSERT INTO students VALUES(NULL, '$name', '$age', '$roll', '$address', '$cell')";
    if(mysqli_query($conn, $sql)){
    
        $_SESSION['success']=1;
        header('location: index.php');
    }
    else{
        
        $_SESSION['error']=1;
        header('location: index.php');
    }

?>
    
    

