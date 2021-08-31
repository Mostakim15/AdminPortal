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
                <h1 class="sbi">Update Student Info</h1>
                    <form action="update.php?id=<?php echo $id ?>" method="POST">
                        <div class="form-check">
                            <label for="Name">Name</label>
                            <input type="text" required class="form-control" name="name" placeholder="Please enter student name" value="<?php echo $std['name']?>">
                        </div>

                        <div class="form-check">
                            <label for="Age">Age</label>
                            <input type="text" required class="form-control" name="age" placeholder="Please enter student age" value="<?php echo $std['age']?>">
                        </div>

                        <div class="form-check">
                            <label for="Roll">Roll</label>
                            <input type="text" required class="form-control" name="roll" placeholder="Please enter student roll" value="<?php echo $std['roll']?>">
                        </div>

                        <div class="form-check">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Please enter student address" value="<?php echo $std['address']?>">
                        </div>

                        <div class="form-check">
                            <label for="Cell">Cell Number</label>
                            <input type="text" required class="form-control" name="cell" placeholder="Please enter student cell number" value="<?php echo $std['cell']?>">
                        </div>

                        <button type="submit" class="btn btn-success m-1" name="submit" >Save</button>
                    </form>
                </div>
           </div> 
    </div>








    <?php include ("./include/footer.php") ?>