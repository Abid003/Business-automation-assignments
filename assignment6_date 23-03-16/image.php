<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="bg-success text-center text-white p-2 m-2 rounded">
            Image upload and view using PHP
        </h1>



        <div class="row">
            <h5 class="bg-lite text-center p-2 m-2">Select an image to upload </h5>
            <div class="col-4"></div>
            <div class="col-4">
                <form action="image_up.php" id="my-button" method="post" enctype="multipart/form-data">
                    <div class="bg text-center mt-5">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group  text-center">
                        <input type="submit" required name="upload" class="bg-lite rounded m-2 p-2 border-0 text-primary" value="upload">
                    </div>
                </form>

            </div>
            <div class="col-4"></div>

        </div>

        

        <div class="row  text-center ">
            <div class="col-6 h-50 ">
                <h1 class=" bg-lite text-primary">Images from local storage</h1>

                <?php
                include("dbconnector.php");
                $sql = "select * from image";
                $result = mysqli_query($conn, $sql) or die("failed");
                $output = "";
                if (mysqli_num_rows($result) > 0) {
                   

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="m-2"><img height="200" src="'.$row['img_path'].$row['img_name'].'" alt=""> </div>';
                    }


                    mysqli_close($conn);
                   
                } else {
                    echo "no record found";
                }
                ?>


            </div>
            <div class="col-6">
                <h1 class=" bg-lite text-primary">Image from database</h1>
               <div>
               <?php
                include("dbconnector.php");
                $sql = "select * from image";
                $result = mysqli_query($conn, $sql) or die("failed");
                $output = "";
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                       $image = $row['Img_bitcode'];                
                    echo '<div class="m-2"><img height="200" src="data:image/png;base64,'.$image.'" alt=""><div>';
                    }

                 
                    mysqli_close($conn);
                  
                } else {
                   echo "no record found";
                }
                ?>
               </div>
            </div>

        </div>
    </div>


    <script src="image.js"></script>
</body>

</html>