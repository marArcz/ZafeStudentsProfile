<?php 
    require_once '../app/connectiondb.php';

    if(isset($_SESSION['user_id'])){
        if(isset($_POST['search'])){
            $search_field = $_POST['search_field'];
            $value = $_POST['value'];

            $query = 'SELECT * FROM studentsprofile WHERE ';
            $search_value = '%' . $value .'%';

            if($search_field === 'all'){
                $query .= '(student_no LIKE :search_value OR firstname LIKE :search_value OR lastname LIKE :search_value OR program_code = :value OR year = :value)';

                $stmt = $pdo->prepare($query);
                $stmt->bindParam('search_value',$search_value,PDO::PARAM_STR);
                $stmt->bindParam('value',$value,PDO::PARAM_STR);

                $stmt->execute();
            }else{
                $query .= "$search_field LIKE :search_value";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam('search_value',$search_value,PDO::PARAM_STR);
            }
            $stmt->execute();
            $students = $stmt->fetchAll();
        }else{
            $stmt = $pdo->query('SELECT * FROM studentsprofile');
            $stmt->execute();

            $students = $stmt->fetchAll();
        }
    }else{
        echo 'User not logged in.'; 
    }
?>