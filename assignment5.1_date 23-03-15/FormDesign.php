<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header> </header>

    <main>
        <div id="example-basic">
            <h3>page 1</h3>
            <section>

                <label for="name">Name</label>
                <input type="text" class="form-control" name="name[]" id="emp-name">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email[]" id="emp-email">
            </section>

            <h3>page 2</h3>

            <section>

                <label for="mobile">Mobile number</label>
                <input type="number" class="form-control" name="mobile[]" id="emp-mobile">
                <label for="gender">Gender</label>
                <select id='gender' name='gender[]'>
                    <option value='male'>Male</option>
                    <option value='Female'>Female</option>
                </select>
            </section>


            <h3>page 3</h3>
            <section>
                <label for="dob">Date of birth</label>
                <input type="date" class="form-control" name="dob[]" id="emp-dob">

                <label for="regig">Regignition</label>
                <input type="text" class="form-control" name="regig[]" id="emp-regig">
            </section>

            <h3>page 3</h3>
            <section>

                <label for="salary">Salary</label>
                <input type="number" class="form-control" name="salary[]" id="emp-salary">

                <label for="status">Status</label>
                <input type="number" class="" name="status[]">
                <label for="status">Status</label>
                <input type="number" class="" name="status[]">

            </section>

        </div>
    </main>

    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>

</html>