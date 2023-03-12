

var value = "";
var result;


function handleBtn(num) {
   
    var display = document.querySelector(".display input")
    if (num == "=") {
        $.ajax({
       
            url: "load.php",
            type: "POST",
            data: {
        
            },
            success: function (data) {
        
                document.querySelector(".hist").innerHTML = data;
                
            },
            error: function (data) {
                console.log("error!!");
            }
        });
        try {
            result = eval(value);
            $.ajax({
       
                url: "cal_ajax.php",
                type: "POST",
                data: {
                    result: result,
                    value : value
        
                },
                success: function (data) {
        
            
                    if (data == 1) {
                        alert("added value successfully");
        
                    } else {
                        alert("added value successfully");
                    }
                },
                error: function (data) {
                    console.log("error!!");
                }
            });
        }
        catch (err) {
            display.setAttribute('value', "syntax error");
            value = "";
        }

        // console.log(eval(value));
        display.setAttribute('value', result);
        value = result;
    } else {
        value = value + num;
        display.setAttribute('value', value);

    }

    if (num == "ac") {
        display.setAttribute('value', "");
        value = "";
    }
    if (num == "cl") {
        value = value.substring(0, string.length - 1)
        display.setAttribute('value', value);

    }




}




