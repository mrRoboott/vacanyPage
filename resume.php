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
        $sql = "SELECT * from resiume ";
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

<div class="resume">

</div>

    <?php
        if(isset($_SESSION['user_type']) and $_SESSION['user_type']==2){
            echo '<button class=addresume>რეზიუმეს დამატება</button>';
        }
    ?>

    <script>
    $('.addresume').click(function(){
        $.ajax({type:'POST', url:'addresume.php', success:function(res){$('div.resume').html(res)}})
    })
    </script>

</body>
</html>