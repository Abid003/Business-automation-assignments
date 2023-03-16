$(document).ready(function(){
    $('#my-table').DataTable();
    $('#my-button').click(function(){
        console.log("hello")
      $.ajax({
        url: 'curl_load.php',
        type: 'GET', 
        success: function(response){
          console.log(response); 
          $("#my-table").html(response);
    
        },
        error: function(xhr, status, error){
          console.log(error);
        }
      });
    });

    
  });