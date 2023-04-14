<?php
include('db_connect.php');

if(isset($_POST['submit'])){
    $kategoria = $_POST['kategoria'];
    $xelfasi = $_POST['xelfasi'];
    $mdebareoba = $_POST['mdebareoba'];
    $kompania = $_POST['kompania'];

    session_start();
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO vakansia(kategoria, xelfasi, mdebareoba, kompania, user_id) 
    values('$kategoria', '$xelfasi', '$mdebareoba', '$kompania', '$user_id')";
    mysqli_query($conn, $sql);
    header("Location: ../works");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <form method="POST" action="addvacancy.php" style="margin:10px 0px">

        კატეგორია: <input type="text" name="kategoria"> </br>
        ხელფასი: <input type="text" name="xelfasi"></br>
        მდებარეობა: <input type="text" name="mdebareoba"></br>
        კომპანია: <input type="text" name="kompania"></br>

        <input type="submit" name="submit" value="დამატება">
    </form>

</body>
</html>