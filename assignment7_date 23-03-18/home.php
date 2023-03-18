<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>



    <div class="container">
        <header>
            <div class="row">
                <nav class="navbar navbar-expand ">
                    <div class="row"></div>
                    <h1 class="col-4 text-center">Form Design</h1>
                    <ul class="navbar-nav col-8 justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="form.php">Add New</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cotact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <main>
            <div>
                <h4 class="text-center my-4">employee table</h4>
            </div>
            <table id="myTable" class="table">
                <thead>
                    <tr>


                        <th>SN</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">resign</th>
                        <th scope="col">salary</th>
                        <th scope="col">status</th>
                        <th scope="col">created by</th>
                        <th scope="col">created at</th>
                        <th scope="col">common id</th>
                        <th scope="col">address</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    include("dbconnector.php");
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
                                        <td>{$row['adress']}</td>  
                                                                 
                                        
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
                                        <td>{$row['adress']}</td>                  
                                       
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
        </main>
    </div>

    <script src="form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>