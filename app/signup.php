<?php 
    require_once '../app/connectiondb.php';


    if(isset($_POST['signup'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        //check if username exists already
        $query = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $query->execute([$username]);

        if($query->rowCount() > 0){
            $error['username'] = "Sorry, username is already taken";
        }else{
            // check if password matches
            if($password !== $confirm_password){
                $error['password'] = 'Password does not match';
                $error['confirm_password'] = 'Password does not match';

            }else{
                // hash password
                $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                $query = $pdo->prepare('INSERT INTO users(firstname,lastname,username,password) VALUES(?,?,?,?)');

                $added = $query->execute([$firstname,$lastname,$username,$hashed_password]);

                if($added){
                    header('location: ../index.php?message=You Successfully Created an Account!');
                    exit;
                }else{
                    $error['signup'] = "Error creating your account!";
                }
            }
        }
    }
?>