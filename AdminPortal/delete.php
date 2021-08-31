<?php
       session_start();
       if(!isset($_SESSION['login'])){
         header("location: home.php");
           die();
       }
       

    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "DELETE FROM students WHERE id = $id";
    $id=$id-1;
    if(mysqli_query($conn, $sql)){
        
        header("location: index.php");
    }
    else{
        echo "Is not Deleted";
    }


?>
