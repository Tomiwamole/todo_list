<?php 

include './connect.php';
$id = $_POST['id'];

$query = "SELECT * FROM tasks WHERE id = $id";
$result = mysqli_query($connect, $query);
$ans = mysqli_fetch_assoc($result);

$done = $ans['done'];

if($done == 0){
    $done = 1;
}else{
    $done = 0;
}

$query = "UPDATE tasks SET done = $done WHERE id = $id";
$result = mysqli_query($connect, $query);

?>