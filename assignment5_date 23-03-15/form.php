<?php

include('dbconnector.php');
session_start();
if (isset($_SESSION['name'])) {

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
        $commonId;

        $findColumnId = mysqli_query($conn, "SELECT MAX(common_id) as result FROM `employee`");
        $commonIdRes = mysqli_fetch_array($findColumnId);
        $commonId = $commonIdRes['result'];


        if ($commonIdRes['result'] == "") {
            $commonId = 1;
        } else {
            $commonId ++;
        }

        echo $commonId;

           
        foreach ($name as $i => $names) {
            $name1 = $names;
            $email1 = $email[$i];
            $mobile1 = $mobile[$i];
            $gender1 = $gender[$i];
            $dob1 = $dob[$i];
            $regig1 = $regig[$i];
            $status1 = $status[$i];
            $salary1 = $salary[$i];

            $sql = "INSERT INTO `employee`( `name`, `email`,`gender`, `dob`, `regig`, `salary`, `status`, `addedby`, `addedat`, `mobile`,`common_id`) VALUES ('{$name1}', '{$email1}','{$gender1}','{$dob1}','{$regig1}','{$salary1}','{$status1}','{$upby}','{$time}','{$mobile1}','$commonId')";

            if (mysqli_query($conn, $sql)) {
                echo "added";
            } else {
                echo "not added";
            }
        }
    }
} else {
    echo "please login first";
}


?>
