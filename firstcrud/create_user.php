<?php
require($_SERVER['DOCUMENT_ROOT'].'/firstcrud/includes/connect.php');

if(isset($_POST['insert'])){ 
    header('Location: ./users.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <h1>Create User</h1>
            </div>
            <div class="col-2">
                <button class="btn btn-primary"><a class="text-decoration-none text-light" href="./users.php">Users list</a></button>
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                <form class="mt-3" action="qf/qf.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="text" class="form-control" name="birth" autocomplete="off">
                    </div>
                    <input type="hidden" name="action" value="insert">
                    <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <img src="./assets/images/1.jpg" class="img-fluid" alt="users">
            </div>
        </div>

    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>