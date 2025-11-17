<?php
$connect = mysqli_connect("localhost","root","mysql","uprak");
if(!$connect){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?> 