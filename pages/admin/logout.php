<?php 
    session_start();
    include('model/session.php');
    session_destroy();

    header('location: login.php');
?>