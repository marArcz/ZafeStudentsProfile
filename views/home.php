<?php
require '../app/start_session.php';
require '../app/search.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICT STUDENTS PROFILE</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1 class="title">CICT STUDENTS PROFILE</h1>
    <form action="" method="post">
        <label for="search_field">Filter results by:</label>
        <select name="search_field" id="search_field">
            <option value="student_no">Student No</option>
            <option value="firstname">Firstname</option>
            <option value="middlename">Middlename</option>
            <option value="lastname">Lastname</option>
            <option value="program_code">Program Code</option>
            <option value="year">Year</option>
            <option value="all">All</option>
        </select>

        <label for="value">Value:</label>
        <input type="text" name="value" id="value">
        <input type="submit" name="search" value="Search">
    </form>

    <a href="add_student.php">Add Student</a>
    <br><br>
 
    <?php
    if (count($students) > 0) {
    ?>

        <table>
            <thead>
                <tr>
                    <th>Student No</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Program Code</th>
                    <th>Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $key => $student) :
                ?>
                    <tr>
                        <td><?= $student['student_no'] ?></td>
                        <td><?= $student['firstname'] ?></td>
                        <td><?= $student['middlename'] ?></td>
                        <td><?= $student['lastname'] ?></td>
                        <td><?= $student['program_code'] ?></td>
                        <td><?= $student['year'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $student['id'] ?>">Edit</a>
                            <a href="../app/delete.php?id=<?= $student['id'] ?>" onclick="showDeleteMsg()">Delete</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p>No students found.</p>
    <?php
    }
    ?>
</body>

<script>
    function showDeleteMsg() {
        alert("Record deleted successfully");
    }
</script>

</html>