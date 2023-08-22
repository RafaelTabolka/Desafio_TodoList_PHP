<?php  
    include 'config.php';

    $id = $_POST['idUpdate'];
    $txt = $_POST['txtUpdate'];

    $sql = "UPDATE tarefa SET txt = '$txt' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo 1;
    }else {
        echo "Error: {$sql}" . mysqli_error($conn);
    }
?>