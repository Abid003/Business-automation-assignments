<?php

/// created for testing purpose

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $childCount = $_POST['childCount'];


    $namearr = array();
    for ($i = 1; $i <= $childCount; $i++) {

        $namearr[$i] = $_POST['name' . $i];
        echo $namearr[$i];
    }

    echo $name;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <form action="" id="form-id" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="emp-name">


            <div id="child-form">

            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="emp-email">
        </div>

        <input id="flag" name="childCount" type="number">

        <input type="submit" name="submit" value="submit">

        <div>

        </div>


        <div id="empTbl">

        </div>



    </form>

    <i class="fa fa-plus" id="add-icon" aria-hidden="true"></i>

    <div class="new-form">

    </div>



    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

   

    <script>
        $(document).ready(function() {

            $("#add-icon").click(function() {

                var txt = '<div class="main-form"><label for="name">Name</label><input type="text" class="form-control" name="name" id="emp-name">'
                txt += '<label for="email">Email</label><input type="email" class="form-control" name="email" id="emp-email">'

                txt+= ' <label for="mobile">Mobile number</label><input type="number" class="form-control" name="mobile" id="emp-mobile">';

                txt+= ' <label for="mobile">Mobile number</label><input type="number" class="form-control" name="mobile" id="emp-mobile">'

                txt+= '<label for="dob">Date of birth</label><input type="date" class="form-control" name="dob" id="emp-dob">';

                txt+= '<label for="salary">Salary</label><input type="number" class="form-control" name="salary" id="emp-salary">'

                txt+='<label for="status">Status</label> <input type="number" class="" name="status"> <br>';

                txt += ' <label for="regig">Regignition</label><input type="text" class="form-control" name="regig" id="emp-regig"> ' ;

                txt+= "<button type='button' class='btn btn-danger' id='remove-btn'><i class='fa fa-minus'></i> - </button></div>";
                $('#empTbl').append(txt);

            });


            $(document).on('click', '#remove-btn', function() {
                $(this).closest('.main-form').remove();
            });
        });
    </script>


</body>

</html>