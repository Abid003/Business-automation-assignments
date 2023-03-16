<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>php curl</title>
</head>

<body>
    <div class="container">

        <h1 class="bg-primary text-center text-white p-2 m-2 rounded">
            PHP curl
        </h1>

        <div class="row mx-1">
            <div class="col-10"></div>
            <button id="my-button" class="col-2 border-0 text-white font-weight-bold py-2 mr-5 rounded bg-primary">
                load
            </button>
            <div class=""></div>
        </div>


        <table class="table text-center mt-5" id="my-table">
            <thead class="thead-dark">
                <tr class="bg-light">
                    <th scope="col">SN</th>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>hello</td>
                    <td>click the button to continue</td>
                </tr>

            </thead>
        </table>

        <div id="my-div1">

        </div>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" crossorigin="anonymous" 
referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="curl.js"></script>

</html>