<?php 

include './connect.php';
$id = $_POST['id'];
$name = $_POST['name'];

$query = "UPDATE tasks SET name = '$name' WHERE id = $id ";
$result = mysqli_query($connect, $query);

?>