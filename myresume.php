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
            <th>სახელი</th>
            <th>გვარი</th>
            <th>ასაკი</th>
            <th>საცხოვრებელი ადგილი</th>
            <th>პროფესია</th>
            <th>ტელეფონის ნომერი</th>
        </tr>

        <?php
        $user_id = $_SESSION['user_id'];
        
        $sql = "SELECT * from resiume where user_id='$user_id'";
        $res = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($res)){
                    echo '<tr><td>'.$row['saxeli'].'</td>
	                <td>'.$row['gvari'].'</td>'.
	                '<td>'.$row['asaki'].'</td>'.
                    '<td>'.$row['sacxovrebeli_adgili'].'</td>'.
                    '<td>'.$row['profesia'].'</td>'.
                    '<td>'.$row['telefonis_nomeri'].'</td></tr>';
                 }
        ?>
        
</table>
    
</body>
</html>