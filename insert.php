<?php
include 'config.php';

$txt = $_POST['txt'];

$sql = "INSERT INTO tarefa (txt, feito) VALUES ('$txt', false)";
$result = mysqli_query($conn, $sql);

if ($result) {
   echo 1;
} else {
   echo "Error: {$sql}" . mysqli_error($conn);
}
