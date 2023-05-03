<?php 
require_once '../app/connectiondb.php';

$id = $_GET['id'];

if(isset($_POST['save'])){
    $student_no = $_POST['student_no'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $programcode = $_POST['programcode'];
    $year = $_POST['year'];

    $stmt = $pdo->prepare('UPDATE studentsprofile SET student_no=?,firstname=?,middlename=?,lastname=?,program_code=?,year=? WHERE id = ?');

    $stmt->execute([$student_no,$firstname,$middlename,$lastname,$programcode,$year,$id]);

    header("location: home.php");

    exit();
}

$stmt = $pdo->prepare('SELECT * FROM studentsprofile WHERE id = ?');
$stmt->execute([$id]);
$student = $stmt->fetch();

if(!$student){
    header('location: ..views/search.php');
}
?>