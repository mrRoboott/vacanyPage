<?php
    $file = $_POST['id'];
    session_start();
    $_SESSION['menu']=$file;
    include($file.'.php');
?>