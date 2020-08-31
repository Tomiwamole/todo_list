<?php  
include './connect.php';
$name = $_POST['name'];

$query = "INSERT INTO tasks(name, done) VALUES('$name', 0)";
$result = mysqli_query($connect, $query);

?>