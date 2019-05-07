<?php
    require ("connexion.php");
    $host = "localhost";
    $dbname = "espacemembrestest";
    $password = HTMLspecialchars($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    
?>