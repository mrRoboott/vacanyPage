<?php
    $conn = mysqli_connect('localhost', 'giga', 'giga1234', 'works');

    if(isset($_POST['submit'])){
        $saxeli = $_POST['saxeli'];
        $gvari = $_POST['gvari'];
        $paroli = md5($_POST['paroli']);
        
        $sql = "SELECT * from momxmarebeli where saxeli='$saxeli' and gvari='$gvari' and paroli='$paroli'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) == 1){
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_type'] = $row['tipi'];
            $_SESSION['user_name'] = $row['saxeli'];
            header("Location: ../works");
        } else{

        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form method="POST" action="login.php">
        სახელი: <input type="text" name="saxeli"> </br>
        გვარი: <input type="text" name="gvari"></br>
        პაროლი: <input type="password" name="paroli"></br>

        <button type="submit" name="submit" value="submit">შესვლა</button>
    </form>
</body>
</html>