<?php

include('dbconnector.php');
session_start();

if(isset($_SESSION['name'])){

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $regig = $_POST['regig'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $time = date("Y/m/d");
        $upby = $_SESSION['name'];
    
    
        echo $name.  $email.$mobile.$dob.$gender.$salary.$status.$time.$upby." ";
        
        $sql = "INSERT INTO `employee`( `name`, `email`,`gender`, `dob`, `regig`, `salary`, `status`, `addedby`, `addedat`, `mobile`) VALUES ('{$name}', '{$email}','{$gender}','{$dob}','{$regig}','{$salary}','{$status}','{$upby}','{$time}','{$mobile}')";
    
      
        if (mysqli_query($conn, $sql)) {
            echo "added";
        } else {
            echo "not added";
        }
    }

}else{
    echo "please login first";
}

?>


