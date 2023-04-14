<?php
    $conn = mysqli_connect('localhost', 'giga', 'giga1234', 'works');

    if(isset($_POST['submit'])){
        $saxeli = $_POST['saxeli'];
        $gvari = $_POST['gvari'];
        $paroli = md5($_POST['paroli']);
        $tipi = $_POST['type'];
        
 $sql="INSERT INTO momxmarebeli(saxeli, gvari, paroli, tipi) values('$saxeli', '$gvari', '$paroli', '$tipi') ";
        mysqli_query($conn, $sql);
        header("Location: ../works");
    }
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form method="POST" action="registration.php">
        სახელი: <input type="text" name="saxeli"> </br>
        გვარი: <input type="text" name="gvari"></br>
        პაროლი: <input type="password" name="paroli"></br>
        
        <input type="radio" id="damsaqmebeli" name="type" value="1">
        <label for="damsaqmebeli">დამსაქმებელი</label>
        <input type="radio" id="musha" name="type" value="2">
        <label for="musha">მუშა</label></br>

        <button type="submit" name="submit" value="submit">რეგისტრაცია</button>
    </form>
</body>
</html>