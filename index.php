<?php
    session_start();
    if(!isset($_SESSION['menu'])){
        $_SESSION['menu']='vacancy';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>დასაქმდი მარტივად</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .menu td, button, #washla{
            cursor: pointer;
        }
        header{
            background-color: black;
        }
        main{
            background-color: #CCFFFF; 
        }
        table, td, th{
            border: 1px solid;
        }
    </style>
    <script src="jquery.js"></script>
</head>
<body>
 
    <?php include('menu.php');?>

    <main>

    </main>

       <script>
        $('.menu td').click(function(){
            file = $(this).attr('id');
            $.ajax({type:"POST", data:'id='+file, url:'content.php', success:function(res){$('main').html(res)}});
        });
       </script>

        <script> $(document).ready(function(){$("#<?php echo $_SESSION['menu']; ?>").click();});	</script>

</body>
</html>