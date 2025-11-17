<?php
    include 'connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $tinggi= $_POST['tinggi']; 
    $gaya = $_POST['gaya'];

    mysqli_query($connect,"update data set name = '$name',age = '$age',gender = '$gender',tinggi = '$tinggi',gaya = '$gaya' where id = '$id'");

    header("location:data.php");
?>