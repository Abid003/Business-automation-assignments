
<?php

include('dbconnector.php');
session_start();
$_SESSION['name'] = 'abid';
if (isset($_SESSION['name'])) {

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $address = $_POST['divition']. ', '.$_POST['dist'].', '. $_POST['thana'];
        $regig = $_POST['regig'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $time = date("Y/m/d");
        $upby = $_SESSION['name'];
        $commonId;

        $findColumnId = mysqli_query($conn, "SELECT MAX(common_id) as result FROM `employee`");
        $commonIdRes = mysqli_fetch_array($findColumnId);
        $commonId = $commonIdRes['result'];


        if ($commonIdRes['result'] == "") {
            $commonId = 1;
        } else {
            $commonId ++;
        }
    

            $sql = "INSERT INTO `employee`( `name`, `email`,`gender`, `dob`, `regig`, `salary`, `status`, `addedby`, `addedat`, `mobile`,`common_id`,`adress`) VALUES ('{$name}', '{$email}','{$gender}','{$dob}','{$regig}','{$salary}','{$status}','{$upby}','{$time}','{$mobile}','$commonId','{$address}')";

            if (mysqli_query($conn, $sql)) {
                echo "added";
            } else {
                echo "not added";
            }
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <header>
            <div class="row">
                <nav class="navbar navbar-expand ">
                    <div class="row"></div>
                    <h1 class="col-4 text-center">Form Design</h1>
                    <ul class="navbar-nav col-8 justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="form.php">Add New</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cotact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <main class="">
            <div class="text-center">
                <h5 class="mt-5 bg-lite py-2 rounded"> Add New Employee</h5>
            </div>

            <div class="row">
                <div class="col-3"></div>
                <form action="form.php" class="form col-6" id="form-id" method="post">
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
                        <select class='form-control' aria-label='Default select example' id='gender' name='gender'>
                            <option value='male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="date" class="form-control" name="dob" id="emp-dob">
                    </div>

                    <div class="form-group" id="adress-div">
                        <label for="Adress">Divition</label>
                        <select class='form-control' aria-label='Default select example' id='adress' name='divition'>
                            <option value='a'>Select an Option</option>
                            <option value='Dhaka'>Dhaka</option>
                            <option value='Rajshahi'>Rajshahi</option>
                            <option value='Chittagong'>Chittagong</option>
                            <option value='Syllet'>Syllet</option>
                            <option value='Cumilla'>Cumilla</option>
                            <option value='Jassore'>Jassore</option>
                            <option value='Rongpur'>Rongpur</option>
                        </select>
                    </div>

                    <div id="distric">
                        <label for="dist">District</label>
                        <input id="dist" type="text" class="form-control" name="dist">
                    </div>

                    <div id="thana">
                        <label for="thana">thana</label>
                        <input type="text" class="form-control" name="thana">
                    </div>

               

                    <div class="form-group">
                        <label for="regig">Resignation</label>
                        <input type="text" class="form-control" name="regig" id="emp-regig">
                    </div>

                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="number" class="form-control" name="salary" id="emp-salary">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class='form-control' aria-label='Default select example' id='gender' name='status'>
                            <option value='1'>Active</option>
                            <option value='0'>Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control bg-primary text-white" name="submit" value="submit">
                    </div>
                </form>
                <div class="col-3"></div>
            </div>

        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="form.js"></script>
</body>

</html>