<?php
    $pseudo = HTMLspecialchars($_POST['pseudo']);
    $email = HTMLspecialchars($_POST['email']);
    $password = HTMLspecialchars($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    // echo $pseudo . '<br>' . $email . '<br>' . $password;

    if (!isset($email) && !isset($pseudo) && !isset($password)){
        
    } else {
        $req = $bdd ->prepare("INSERT INTO espacemembres (email; pseudo, password) VALUES ('$email', '$pseudo', '$password')");
        $req->execute();
    }

?>