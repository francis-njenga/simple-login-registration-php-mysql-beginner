<?php
require_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./frontend/assets/css/style.css">
</head>

<body>

    <div class="user-details">
        <p>Logged in user</p>
        <?php
        //you can use object to access user information
        echo '<p>Name: ' . $get_user->name . '</p><br>';
        ?>
        <p> Email: 
        <?php 
         //or use function to access user information
        get_user("email")
        ?></p>
        <a href="logout">Logout</a>

    </div>


</body>

</html>