<?php
    include 'config.php';

    $sql = "SELECT * FROM tarefa";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
?>

Tarefas Totais: <span><?php echo $count; ?></span> 