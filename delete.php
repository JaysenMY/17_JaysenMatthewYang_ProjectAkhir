<?php
include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM data WHERE id='$id'";
mysqli_query($connect, $query);

header("Location: data.php");
exit;
?>