<?php
    if(!isset($_SESSION['usertype'])){
        header("Location: login.php");
    }
?>