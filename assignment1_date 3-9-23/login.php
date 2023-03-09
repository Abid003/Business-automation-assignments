<?php

include "dbconnector.php";

if (isset($_POST["submit"])) {



    $email = $_POST["email"];
    $password = $_POST["password"];

    $findEmail = mysqli_query($conn, "SELECT * FROM info where email = '$email' ");
    $emailRes = mysqli_fetch_array($findEmail);

    if (is_null($emailRes)) {
        echo "user not found";
    }else{
        $findpass = mysqli_query($conn, "SELECT password FROM info where email = '$email' ");
        $dbpass = mysqli_fetch_array($findpass);
        if($dbpass['password'] == $password){
           session_start();
           $findname = mysqli_query($conn, "SELECT name FROM info where email = '$email' ");
            $dbname = mysqli_fetch_array($findname);
            $_SESSION["name"]= $dbname;
            header("Location: home.php");
        }else{
            $msg = "password didnt match";
        }
    }
        

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        #login{
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
    </style>
</head>

<body>

    <div id="login">
        <form action="" method="post">

            <div>
                <label for="email">enter your email</label>
                <input type="email" id="email" name="email">
                
            </div>

            <div>
                <label for="password">enter your password</label>
                <input type="password" id="password" name="password">
                <span>
                    <?php isset($msg)?$msg:"" ?>
                </span>
            </div>
            <div>
                <input type="submit" name="submit" value="login">
            </div>
        </form>
        <a href="signup.php">signup</a>
    </div>

</body>

</html>