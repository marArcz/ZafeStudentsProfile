<?php 
require './connectiondb.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM studentsprofile WHERE id=?');
    $stmt->execute([$id]);

    header("location: ../views/home.php");
}
?>