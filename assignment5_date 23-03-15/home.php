<?php
include 'dbconnector.php';
$adminname = "";
session_start();
if (isset($_SESSION['name'])) {
    $adminname = $_SESSION['name'];
    // echo $adminname;
} else {
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 class="col-md-8">Admin pannel</h1>
        <div class="container col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalScrollable">
                Add Employee
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalScrollableTitle"></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--hidden form div starts here -->
                            <div class="form-div">

                                <form action="form.php" id="form-id" method="post">
                                    <h3>Add new employee</h3>
                                    <div class="form-group input-group-text">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name[]" id="emp-name">

                                    </div>
                                    <div id="child-form">

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email[]" id="emp-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile">Mobile number</label>
                                        <input type="number" class="form-control" name="mobile[]" id="emp-mobile">
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class='form-control' aria-label='Default select example' id='gender' name='gender[]'>
                                            <option value='male'>Male</option>
                                            <option value='Female'>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="dob">Date of birth</label>
                                        <input type="date" class="form-control" name="dob[]" id="emp-dob">
                                    </div>

                                    <div class="form-group">
                                        <label for="regig">Regignition</label>
                                        <input type="text" class="form-control" name="regig[]" id="emp-regig">
                                    </div>

                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="number" class="form-control" name="salary[]" id="emp-salary">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="number" class="" name="status[]">
                                        <label for="status">Status</label>
                                        <input type="number" class="" name="status[]">

                                    </div>

                                    <div id="new-form">

                                    </div>



                                    <div class="form-group">
                                        <input type="submit" class="form-control" name="submit" value="submit">
                                    </div>
                                </form>


                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="add-icon" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>logged in as <?php echo $adminname; ?></p>
        <div class="row">
            <div class="col-md-12">
                <div class="emptbl-div">
                    <h2>Emplpoyee list</h2>
                    <table id="myTable" class="table-striped">
                        <thead>
                            <tr>


                                <th>SN</th>
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
                                <th>common id</th>
                                <th>edit</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php


                            $previousId = 0;
                            $serial = 1;

                            $sql = "select * from employee";
                            $result = mysqli_query($conn, $sql) or die("failed");
                            $output = "";
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($previousId == $row['common_id']) {
                                        $output .= "<tr>
                                        <td>{$serial}</td>
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
                                        <td>{$row['common_id']}</td>  
                                        <td></td>                          
                                        
                                    </tr>  ";
                                    } else {

                                        $output .= "<tr>
                                        <td>{$serial}</td>
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
                                        <td>{$row['common_id']}</td>                   
                                        <td> <button onclick='updateTable(" . $row['common_id'] . ")'>edit</button></td>
                                    </tr>  ";

                                        $previousId = $row['common_id'];
                                    }

                                    $serial++;
                                }
                                mysqli_close($conn);
                                echo  $output;
                            } else {
                                echo "no record found";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="logout.php">logout</a>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="script.js"></script>
    <script src="edit.js"></script>

</body>

</html>