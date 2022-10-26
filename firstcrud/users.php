<?php

require($_SERVER['DOCUMENT_ROOT'].'/firstcrud/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'].'/firstcrud/functions/functions.php');

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

    <div class="container mt-5 ">
        <div class="row mb-5">
            <div class="col-10">
                <h1>Users List</h1>
            </div>
            <div class="col-2">
                <button class="btn btn-primary"><a class="text-decoration-none text-light" href="./create_user.php">Create User</a></button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Birth</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = fetchUsers ();

                foreach ($users as $user) {
                    echo "
                        <tr>
                        <td>{$user['id']}</td>
                        <td>{$user['firstname']}</td>
                        <td>{$user['lastname']}</td>
                        <td>{$user['email']}</td>
                        <td>{$user['phone']}</td>
                        <td>{$user['birth']}</td>
                        <td>
                    <button class='btn btn-danger'><a href='qf/qf.php?action=delete&id={$user['id']}' class='text-light'>Delete</a></button>
                    <button class='btn btn-info'><a href='create_user.php?action=update&id={$user['id']}' class='text-light'>Update</a></button>
                </td>
                        </tr> ";
                    }
                    echo "</tbody></table></div>"

                ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>