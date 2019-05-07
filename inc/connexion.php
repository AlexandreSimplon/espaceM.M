<?php
    $email = HTMLspecialchars($_POST['email']);
    $password = HTMLspecialchars($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    echo $email . '<br>' . $password;
?>