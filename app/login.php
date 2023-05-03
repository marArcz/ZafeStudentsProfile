<?php 
session_start();
require "app/connectiondb.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // find account
    $query = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $query->execute([$username]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fullname'] = $user['firstname'] . ' ' . substr($user['middlename'],0,1) . ' ' . $user['lastname'];
        
        header("location: views/home.php");
        exit();
    }else{
        $error = "Invalid username or password";
    }
}

?>