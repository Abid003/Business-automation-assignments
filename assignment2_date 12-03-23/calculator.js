var value = "";
var result;
var display = document.querySelector(".display input")

function handleBtn(num){
 
    if(num == "="){
        try {
            result = eval(value);
          }
          catch(err) {
            display.setAttribute('value',"syntax error");
            value = "";
          }
      
       console.log(eval(value));
       display.setAttribute('value',result);
       value = result;
    }else{
        value = value+num;
        display.setAttribute('value',value);

    }

    if(num == "ac"){
        display.setAttribute('value',"");
        value = "";
    }
    if(num == "cl"){
        value =  value.substring(0, string.length-1)
        display.setAttribute('value',value);

    }
}

