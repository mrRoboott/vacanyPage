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
        $sql = "SELECT * from vakansia order by tarigi desc";
        $res = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($res)){
                    echo '<tr><td>'.$row['kategoria'].'</td>
	                <td>'.$row['xelfasi'].'₾ </td>'.
	                '<td>'.$row['mdebareoba'].'</td>'.
                    '<td>'.$row['kompania'].'</td>'.
                    '<td>'.date($row['tarigi']).'</td></tr>';
                 }
        ?>
        
    </table>

    <div class="vacancy">

    </div>

    <?php
        if(isset($_SESSION['user_type']) and $_SESSION['user_type']==1){
            echo '<button class=addvacancy>ვაკანსიის დამატება</button>';
        }
    ?>


<script>
    $('.addvacancy').click(function(){
        $.ajax({type:'POST', url:'addvacancy.php', success:function(res){$('div.vacancy').html(res)}})
    })
</script>


</body>
</html>