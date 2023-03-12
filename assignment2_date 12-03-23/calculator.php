<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
 
    <title>calculator</title>

</head>

<body>

    <div class="main-div">

        <div class="child-div">
            <h1>caclulator</h1>
            <div class="display">
                <input type="text" name="display">
            </div>
        </div>


        <div class="calc-body">
            <div class="num-pad">
                <div class="num-row-1">
                    <button onclick="handleBtn('1')">1</button>
                    <button onclick="handleBtn('2')">2</button>
                    <button onclick="handleBtn('3')">3</button>
                    <button onclick="handleBtn('0')">0</button>
                    
                </div>

                <div class="num-row-2">
                    <button onclick="handleBtn('4')">4</button>
                    <button onclick="handleBtn('5')">5</button>
                    <button onclick="handleBtn('6')">6</button>
                    <button onclick="handleBtn('ac')">ac</button>
                   
                </div>

                <div class="num-row-3">
                    <button onclick="handleBtn('7')">7</button>
                    <button onclick="handleBtn('8')">8</button>
                    <button onclick="handleBtn('9')">9</button>
                    <button onclick="handleBtn('+')">+</button>
                </div>

                <div class="num-row-4">
                    <button onclick="handleBtn('*')">*</button>
                    <button onclick="handleBtn('/')">/</button>
                    <button onclick="handleBtn('-')">-</button>
                    <button onclick="handleBtn('=')">=</button>

                </div>
            
                
              

            </div>

            <div class="hist">
                history
            </div>

        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="script.js"></script>

</body>

</html>