<?php require 'app/login.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <h1 class="title">Login</h1>
    <div>
        <p><?php echo isset($_GET['message'])? $_GET['message']:'' ?></p>
    </div>
    <div>
        <p><?php echo isset($error) ? $error : '' ?></p>
    </div>
    <form action="index.php" method="post">
        <div>
            <label for="">Username:</label>
            <input type="text" name="username" class="">
        </div>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" class="">
        </div>

        <button type="submit" name="login">Login</button>

        <p>No account yet? <a href="views/signup.php">Sign up here!</a></p>
    </form>
</body>

</html>