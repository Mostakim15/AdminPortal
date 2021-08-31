<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    if(!isset($_SESSION['login'])){
      header("location: home.php");
        die();
    }
    



?>

<?php include ("./include/header.php") ?>

    <div class="container">
           <div class="row">
             
                <div class="col-md-12">
                <?php if(isset($_SESSION['error'])){ ?>
                     <div class="alert alert-warning">
                        <strong>Warning!</strong> Something wrong.
                      </div>
                   <?php } ?>
                   <a href="index.php" class="btn ans">Back</a>
                   <h1 class="sbi">Enroll New Student</h1>
                    <form action="store.php" method="POST">
                        <div class="form-check">
                            <label for="Name" class="sn">Name</label>
                            <input type="text" required class="form-control" name="name" placeholder="Please enter student name">
                        </div>

                        <div class="form-check">
                            <label for="Age" class="sn">Age</label>
                            <input type="text" required class="form-control" name="age" placeholder="Please enter student age">
                        </div>

                        <div class="form-check">
                            <label for="Roll" class="sn">Roll</label>
                            <input type="text" required class="form-control" name="roll" placeholder="Please enter student roll">
                        </div>

                        <div class="form-check">
                            <label for="Address" class="sn">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Please enter student address">
                        </div>

                        <div class="form-check">
                            <label for="Cell" class="sn">Cell Number</label>
                            <input type="text" required class="form-control" name="cell" placeholder="Please enter student cell number">
                        </div>

                        <button type="submit" class="btn btn-success m-1" name="submit">Save</button>
                    </form>
                </div>
           </div> 
    </div>





    <?php include ("./include/footer.php") ?>
<?php unset($_SESSION['error']);  ?>