<?php 
   
    session_start();
    
    if(!isset($_SESSION['login'])){
      header("location: home.php");
        die();
    }
    
    session_destroy();
    header("location: login.php");

?>