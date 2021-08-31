<?php 
       session_start();
       if(!isset($_SESSION['login'])){
         header("location: home.php");
           die();
       }
       

    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    $cell = $_POST['cell'];

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "UPDATE students SET name='$name', age='$age', roll='$roll', address='$address', cell='$cell' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        header('location: view.php?id=' .$id);
    }
    else{
        echo "Not Successfull";
    }

?>
    