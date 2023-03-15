 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
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


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
     <script src="script.js"></script>
     <script src="edit.js"></script>

 </body>

 </html>