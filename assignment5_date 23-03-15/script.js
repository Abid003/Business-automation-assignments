

$(document).ready(function() {

    $("#add-icon").click(function() {

        var txt = '<div class="main-form">   <h1>Add Employee</h1>'
        
        txt += '<label for="name">Name</label><input type="text" class="form-control" name="name[]" id="emp-name">'
        txt += '<label for="email">Email</label><input type="email" class="form-control" name="email[]" id="emp-email">'

        txt+= ' <label for="mobile">Mobile number</label><input type="number" class="form-control" name="mobile[]" id="emp-mobile">';

        txt+= " <label for='gender'>Gender</label><select class='form-control' aria-label='Default select example' id='gender' name='gender[]'><option value='male'>Male</option><option value='Female'>Female</option> </select>"

        txt+= '<label for="dob">Date of birth</label><input type="date" class="form-control" name="dob[]" id="emp-dob">';

        txt+= '<label for="salary">Salary</label><input type="number" class="form-control" name="salary[]" id="emp-salary">'

        txt+='<label for="status">Status</label> <input type="number" class="" name="status[]"><br>';

        txt += ' <label for="regig">Regignition</label><input type="text" class="form-control" name="regig[]" id="emp-regig"> <br> ' ;

        txt+= "<button class='btn btn-danger' id='remove-btn'>remove</button><br></div>";
        $('#new-form').append(txt);

    });


    $(document).on('click', '#remove-btn', function() {
       // console.log($('.main-form'))
        $(this).closest('.main-form').remove();
    });
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
});


