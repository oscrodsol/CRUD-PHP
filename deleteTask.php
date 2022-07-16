<?php
    try {
        require('./db.php');

        $idTask = $_GET['id'];

        $sql = "DELETE FROM tasks WHERE id = '$idTask'";

        $connection->exec($sql);

        header('Location: ./index.php');

    } catch (\Exception $exception) {
        echo 'Error Exception: ' . $exception->getMessage();
    }
?>