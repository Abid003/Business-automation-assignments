function updateTable(val){
    $.ajax({
        url: 'update.php',
        type: 'POST',
        data: {val: val},
        success: function(data) {
           
        },
       
    });
}

