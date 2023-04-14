<?php
include('db_connect.php');

if(isset($_POST['submit'])){
    $saxeli = $_POST['saxeli'];
    $gvari = $_POST['gvari'];
    $asaki = $_POST['asaki'];
    $adgili = $_POST['sacxovrebeli_adgili'];
    $profesia = $_POST['profesia'];
    $nomeri = $_POST['nomeri'];

    session_start();
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO resiume(saxeli, gvari, asaki, sacxovrebeli_adgili, profesia, telefonis_nomeri, user_id) 
    values('$saxeli', '$gvari', '$asaki', '$adgili', '$profesia', '$nomeri', '$user_id')";
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

    <form method="POST" action="addresume.php" style="margin:10px 0px">

        სახელი: <input type="text" name="saxeli"> </br>
        გვარი: <input type="text" name="gvari"></br>
        ასაკი: <input type="text" name="asaki"></br>
        საცხოვრებელი ადგილი: <input type="text" name="sacxovrebeli_adgili"></br>
        პროფესია: <input type="text" name="profesia"></br>
        ტელეფონის ნომერი: <input type="text" name="nomeri"></br>

        <input type="submit" name="submit" value="დამატება">
    </form>

</body>
</html>