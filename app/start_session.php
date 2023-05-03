<?php 
session_start();

if(isset($_SESSION['username'])){
    $uname = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
    
    echo "Welcome! <b>$uname</b><br> <br>";
    echo "<a href='../index.php'>Logout</a>";
}else{
    echo "Session username is not set.";
}
?>