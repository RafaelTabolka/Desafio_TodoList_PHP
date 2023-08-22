<?php
    include 'config.php';

    $id = $_POST['updateIdTask'];
    $isDone = $_POST['isDone'];

    if($isDone == 1){        
        $sql = "UPDATE tarefa SET feito = false WHERE id = $id";
    }else if($isDone == 0) {        
        $sql = "UPDATE tarefa SET feito = true WHERE id = $id";
    }

    $result = mysqli_query($conn, $sql);

    if($result == 1){
        echo 1;
    }else {
        echo "Error {$sql}" . mysqli_error($conn);
    }
?>