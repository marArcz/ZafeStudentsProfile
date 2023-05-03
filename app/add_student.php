<?php 
require_once '../app/connectiondb.php';

if(isset($_POST['add_student'])){
    $student_no = $_POST['student_no'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $programcode = $_POST['programcode'];
    $year = $_POST['year'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO studentsprofile(student_no,firstname,middlename,lastname,program_code,year,user_id) VALUES(?,?,?,?,?,?,?)");
    $added = $stmt->execute([$student_no,$firstname,$middlename,$lastname,$programcode,$year,$user_id]);

    echo $added ? "Addded New Record Successfully":"Error inserting data.";

    header("Location: home.php");
    exit;
}
?>