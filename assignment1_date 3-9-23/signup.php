<?php

include 'dbconnector.php';

if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];

    $namestatus = 0;
    $emailstatus = 0;
    $passStatus = 0;


    $nameErr = "";
    $emailErr = "";
    $passErr = "";


    //check email and name already exists or not

    $findName =  mysqli_query($conn, "SELECT * FROM info where name = '$name' ");
    $nameRes = mysqli_fetch_array($findName);

    $findEmail = mysqli_query($conn, "SELECT * FROM info where email = '$email' ");
    $emailRes = mysqli_fetch_array($findEmail);
   

    if (is_null($nameRes)) {
        $namestatus = 1;
    }else{
        $nameErr = "name already exists";
    }

    if (is_null($emailRes)) {
        $emailstatus = 1;
    }else{
        $emailErr = "email arleady exists";
    }

    if ($password == $rpassword) {
        $passStatus = 1;
    }else{
        $passErr = "passwords arnt same";
    }

   // echo $name.$email.$password;
   // echo $namestatus.$emailstatus.$passStatus;

    if ($namestatus == 1 && $emailstatus == 1 && $passStatus == 1) {
        
        $insert =  "INSERT INTO info (name, email, password)
        VALUES ('$name', '$email','$password'); ";

        $go = mysqli_query($conn, $insert);

        if ($go) {
            session_start();
            $_SESSION["name"] = $name;
        } else {
            echo "error!" . mysqli_error($conn);
        }
    }else{
        echo " not success";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <style>
         #signup{
            text-align: center;
            margin: 10px;
            padding: 10px;
        }
        input{
            margin: 5px;
            padding: 5px;
            
        }
        label{
            display: inline-block;
            width: 150px;
            text-align: left;
        
        }

        span{
            display: block;
            margin-bottom: 10px;
            color: red;

        }
    </style>
</head>

<body>

<div id="signup">


    <form action="" method="post">

        <div>
            <label for="name">enter your name</label>
            <input type="name" id="name" name="name" required>
            <span><?php echo isset($nameErr)?$nameErr:"" ?></span>
        </div>

        <div>
            <label for="email">enter your email</label>
            <input type="email" id="email" name="email" required>
            <span><?php echo isset($emailErr)?$emailErr:"" ?></span>
        </div>

        <div>
            <label for="password">create a password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="rpassword">re-enter the password</label>
            <input type="password" id="rpassword" name="rpassword" required>
            <span><?php echo isset($passErr)? $passErr:"" ?></span>
        </div>

        <div>
            <input type="submit" name="signup" value="signup">
        </div>
    </form>
    <a href="login.php">login</a>

    
</div>
</body>

</html>

