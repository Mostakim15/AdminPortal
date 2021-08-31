<?php
    session_start();
if(!isset($_SESSION['login'])){
  header("location: home.php");
    die();
}


    $conn = mysqli_connect('localhost', 'root', '', 'student_info');
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
?>

<?php include ("./include/header.php") ?>
                  

    <div class="container">
           <div class="row">
           
                <div class="col-md-12">
                <?php if(isset($_SESSION['success'])){ ?>
                     <div class="alert alert-success">
                        <strong>Success!</strong> Added successfully.
                      </div>
                   <?php } ?>
                   <?php if(isset($_SESSION['s_msg'])){ ?>
                     <div class="alert alert-success">
                         <?php echo "successfully logged in" ?>
                      </div>
                   <?php } ?>
                <h1 class="sbi">Student Basic Info</h1>
                     <table class="table table-striped table-hover table-dark tstyle">
                         <thead class="thead-light">
                             <th>ID</th>
                             <th>Name</th>
                             <th>Age</th>
                             <th>Roll</th>
                             <th>Address</th>
                             <th>Cell Number</th>
                             <th>Action</th>
                         </thead>
                         <tbody>
                             <?php
                               
                                while($row = mysqli_fetch_assoc($result)){ 
                                    ?>
                             <tr>
                                 <td><?php echo $row['id']?></td>
                                 <td><?php echo $row['name']?></td>
                                 <td><?php echo $row['age']?></td>
                                 <td><?php echo $row['roll']?></td>
                                 <td><?php echo $row['address']?></td>
                                 <td><?php echo $row['cell']?></td>
                                 <td>
                                     <a class="btn btn-info" href="view.php?id=<?php echo $row['id']?>">View</a>
                                     <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                                     <a class="btn btn-danger" onclick="return confirm('Are you sure?') " href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                                 </td>
                             </tr>
                            <?php } ?>
                         </tbody>
                     </table>
                </div>
           </div> 
    </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <?php include ("./include/footer.php") ?>
<?php unset($_SESSION['success']);  ?>
<?php unset($_SESSION['s_msg']);  ?>