<?php
if(isset($_SESSION['user_id'])){
    $tipi = $_SESSION['user_type'];
    echo '<h1>გამარჯობა '.$_SESSION['user_name'].'</h1>';
} 
else 
{$tipi=0;}
?>

<header>
        <table class="menu" border="1" style="margin: 20px auto 0; color: white">
            <tr>
                <?php
                include('db_connect.php');
                $sql = "SELECT * from menu where tipi='$tipi' ";
                $res = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<td id=".$row['menuFile'].">".$row['menuItem']."</td>";
                }
                ?>
            </tr>
        </table>

        <?php
            if($tipi>0){
                echo '<button class="logout" onclick="logout()">გამოსვლა</button>';
            }
        ?>

        <script> 
            function logout() {
                window.location.replace('logout.php');
            }
        </script>

</header>