<?php
include('db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<table id="customers">
        <tr>
            <th>კატეგორია</th>
            <th>ხელფასი</th>
            <th>მდებარეობა</th>
            <th>კომპანია</th>
            <th>დამატების თარიღი</th>
        </tr>

        <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * from vakansia where user_id = '$user_id' order by tarigi desc";
        $res = mysqli_query($conn, $sql);

        while($row=mysqli_fetch_assoc($res)){
                    echo '<tr><td>'.$row['kategoria'].'</td>
	                <td>'.$row['xelfasi'].'₾ </td>'.
	                '<td>'.$row['mdebareoba'].'</td>'.
                    '<td>'.$row['kompania'].'</td>'.
                    '<td>'.date($row['tarigi']).'</td>'.
                    '<td><input type="button" value="წაშლა" id="washla" onclick="washla('.$row['vakansia_id'].')"></td>'
                    .'</tr>';
                 }
        ?>
        
    </table>

    <script>
        function washla(id){
            window.location.replace('delete.php?id='+id);
        }
    </script>
</body>
</html>