<?php require '../app/signup.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1 class="title">Sign Up</h1>
    <?php echo isset($error['signup'])? $error['signup']:'' ?>
    <form action="" method="post">
        <div>
            <label for="">Firstname:</label>
            <input type="text" name="firstname" required value="<?php echo isset($_POST['signup'])? $_POST['firstname']:'' ?>">
            <p class="text-error">
                <?php echo isset($error['firstname']) ? $error['firstname'] : '' ?>
            </p>
        </div>
        <div>
            <label for="">Lastname:</label>
            <input type="text" name="lastname" required value="<?php echo isset($_POST['signup'])? $_POST['lastname']:'' ?>">
            <p class="text-error">
                <?php echo isset($error['lastname']) ? $error['lastname'] : '' ?>
            </p>
        </div>
        <div>
            <label for="">Username:</label>
            <input type="text" name="username" required value="<?php echo isset($_POST['signup'])? $_POST['username']:'' ?>">
            <p class="text-error">
                <?php echo isset($error['username']) ? $error['username'] : '' ?>
            </p>
        </div>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" required value="<?php echo isset($_POST['signup'])? $_POST['password']:'' ?>">
            <p class="text-error">
                <?php echo isset($error['password']) ? $error['password'] : '' ?>
            </p>
        </div>
        <div>
            <label for="">Confirm Password:</label>
            <input type="password" name="confirm_password" required value="<?php echo isset($_POST['signup'])? $_POST['confirm_password']:'' ?>">
            <p class="text-error">
                <?php echo isset($error['confirm_password']) ? $error['confirm_password'] : '' ?>
            </p>
        </div>

        <button type="submit" name="signup">Create Account</button>
        <p>Already have an account? login <a href="../index.php">here!</a></p>
    </form>
</body>

</html>