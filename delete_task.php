<?php 

include './connect.php';
$id = $_POST['id'];

$query = "DELETE FROM tasks WHERE id = $id";
$result = mysqli_query($connect, $query);

?>