<?php
       session_start();
       if(!isset($_SESSION['login'])){
         header("location: home.php");
           die();
       }
       

    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $std = mysqli_fetch_assoc($result);



?>

<?php include ("./include/header.php") ?>

    <div class="container">
           <div class="row">
                
                <div class="col-md-12">
                <a href="index.php" class="btn ans">Back</a>
                <h1 class="sbi">Student Details</h1>
                    <table class="table table-bordered table-dark">
                        <tr>
                            <th>Name : </th>
                            <td><?php echo $std['name'] ?></td>
                        </tr>
                        <tr>
                            <th>Age : </th>
                            <td><?php echo $std['age'] ?></td>
                        </tr>
                        <tr>
                            <th>Roll : </th>
                            <td><?php echo $std['roll'] ?></td>
                        </tr>
                        <tr>
                            <th>Address : </th>
                            <td><?php echo $std['address'] ?></td>
                        </tr>
                        <tr>
                            <th>Cell : </th>
                            <td><?php echo $std['cell'] ?></td>
                        </tr>

                    </table>
                </div>
           </div> 
    </div>








    <?php include ("./include/footer.php") ?>