<?php
include('db_connect.php');
$id = $_GET['id'];

mysqli_query($conn, " DELETE from vakansia where vakansia_id='$id' ");
header("Location: ../works");
?>