<?php
 include 'dbconnector.php';
$adminname = "";
session_start();
if (isset($_SESSION['name'])) {
    $adminname = $_SESSION['name'];
   // echo $adminname;
}else{
    echo "please login first";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <div class="title-div">
        <h1>Admin pannel</h1>
        <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalScrollable">
            Add Employee
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalScrollableTitle">Add new employee</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--hidden form div starts here -->
                        <div class="form-div">

                            <form action="form.php" method="post">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="emp-name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="emp-email">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile number</label>
                                    <input type="number" class="form-control" name="mobile" id="emp-mobile">
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="text" class="form-control" name="gender" id="emp-gender">
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date of birth</label>
                                    <input type="date" class="form-control" name="dob" id="emp-dob">
                                </div>

                                <div class="form-group">
                                    <label for="regig">Regignition</label>
                                    <input type="text" class="form-control" name="regig" id="emp-regig">
                                </div>

                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="number" class="form-control" name="salary" id="emp-salary">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="number" class="" name="status">
                                   
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="form-control" name="submit" value="add">
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <p>logged in as <?php  echo$adminname; ?></p>
    

    <div class="emptbl-div">
        <h2>Emplpoyee list</h2>
        <table class="table">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>resign</th>
                <th>salary</th>
                <th>status</th>
                <th>created by</th>
                <th>created at</th>
              
            </tr>

            <?php
                
                 $sql = "select * from employee";
                 $result = mysqli_query($conn, $sql) or die("failed");
                 $output = "";
                 if(mysqli_num_rows($result)>0){
                     $output;

                     while($row = mysqli_fetch_assoc($result)){
                         $output.= "<tr>
                          
                             <td>{$row['name']}</td>
                             <td>{$row['email']}</td>
                             <td>{$row['mobile']}</td>
                             <td>{$row['gender']}</td>
                             <td>{$row['dob']}</td>
                             <td>{$row['regig']}</td>
                             <td>{$row['salary']}</td>
                             <td>{$row['status']}</td>
                             <td>{$row['addedby']}</td>
                             <td>{$row['addedat']}</td>
                            
                         </tr>  " ;
                     }
             
               
                     mysqli_close($conn);
                     echo "<div>".$output."</div>";
             
                 }else{
                     echo "no record found";
                 }
            ?>


        </table>
    </div>

  
    <div>
        <a href="logout.php">logout</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

</body>

</html>