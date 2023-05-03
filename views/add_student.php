<?php require '../app/start_session.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Record</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1>Add Student Record</h1>
    <a href="home.php">Search and View Students</a>
    <hr>
    <form method="post" onsubmit="addNewRecord()">
        <div>
            <label for="">Student No:</label>
            <input type="text" name="student_no" pattern="\d{4}[\-]\d{5}" placeholder="e.g. 2021-12345" required>
        </div>
        <div>
            <label for="">Firstname:</label>
            <input type="text" name="firstname" pattern="[a-zA-z0-9\s]+" oninvalid="setCustomValidity('Please enter characters only!')" placeholder="Firstname" required>
        </div>
        <div>
            <label for="">Middlename:</label>
            <input type="text" name="middlename" pattern="[a-zA-z0-9\s]+" oninvalid="setCustomValidity('Please enter characters only!')" placeholder="Middlename" required>
        </div>
        <div>
            <label for="">Lastname:</label>
            <input type="text" name="lastname" pattern="[a-zA-z0-9\s]+" oninvalid="setCustomValidity('Please enter characters only!')" placeholder="Lastname" required>
        </div>
        <div>
            <label for="">Program Code:</label>
            <select name="programcode" id="">
                <?php
                $programs = ['BSIS', 'BSINFOTECH', 'BSCS'];
                foreach ($programs as $key => $program) : ?>
                    <option value="<?= $program ?>"><?= $program ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">Year</label>
            <select name="year" id="">
                <?php
                for ($x = 1; $x <= 4; $x++) {
                ?>
                    <option value="<?= $x ?>"><?= $x ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <button type="submit" name="add_student">Save</button>
        <button><a href="home.php">Back</a></button>
    </form>

    <script>
        function addNewRecord() {
            alert("Added new record successfully!");
        }
    </script>
    <?php require '../app/add_student.php' ?>
</body>

</html>