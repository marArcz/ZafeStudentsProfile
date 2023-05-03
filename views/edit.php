<?php
require '../app/start_session.php';
require '../app/edit.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1>Edit CICT Student Profile Record</h1>
    <a href="home.php">Search Students</a> | <a href="./add_student.php">Add Students</a>
    <hr>
    <form method="post">
        <div>
            <label for="student_no">Student No:</label>
            <input type="text" name="student_no" value="<?= $student['student_no'] ?>">
        </div>
        <div>
            <label for="student_no">First Name:</label>
            <input type="text" name="firstname" value="<?= $student['firstname'] ?>">
        </div>
        <div>
            <label for="student_no">Middle Name:</label>
            <input type="text" name="middlename" value="<?= $student['middlename'] ?>">
        </div>
        <div>
            <label for="student_no">Last Name:</label>
            <input type="text" name="lastname" value="<?= $student['lastname'] ?>">
        </div>
        <div>
            <label for="">Program Code:</label>
            <select name="programcode" id="">
                <?php
                $program_code = $student['program_code'];
                $programs = ['BSIS', 'BSINFOTECH', 'BSCS'];

                foreach ($programs as $key => $program) {
                ?>
                    <option <?php echo $program == $program_code ? 'selected' : '' ?> value="<?= $program ?>"><?= $program ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <label for="student_no">Year:</label>
            <select name="year" id="">
                <?php
                $student_year = $student['year'];
                for ($x = 1; $x <= 4; $x++) {
                ?>
                    <option <?php echo $x == $student_year ? 'selected' : '' ?> value="<?= $x ?>"><?= $x ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <button type="submit" name="save">Save</button>
        <button><a href="home.php">Cancel</a></button>
    </form>
</body>

</html>