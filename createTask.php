<?php  
    try {
        require('./db.php');
        
        $title = $_POST['title'];        

        $sql = "INSERT INTO tasks (title) VALUES ('$title')";

        $connection->exec($sql);

        header("Location: ./index.php");
        
    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }
?>