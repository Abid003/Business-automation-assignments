$("#adress").on("change", function () {
    var addr = this.value;
    console.log(addr)
    if (addr != "a") {
        $("#distric").addClass("showInput");
        $("#dist").on("keypress", function () {
            var dist = this.value;
            if (dist != "") {
                console.log(dist)
                $("#thana").addClass("showInput");
            } else {
                $("#thana").removeClass("showInput");
            }
        })
    } else {
        $("#distric").removeClass("showInput");
        $("#thana").removeClass("showInput")
     
    }
})



$('#myTable').dataTable();