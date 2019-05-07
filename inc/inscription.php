<?php
require_once ('../inc/header.php');
?>



<form method="POST" action="connexion.php" >

    <div>
        <label for="pseudo">pseudo</label>
        <input type="pseudo" name="pseudo" required>
    </div>
    <div>
        <label for="email">email</label>
        <input type="email" name="email" required>
    </div>

    <div>
        <label for="password">password</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <button type="submit">Valider</button>
    </div>




</form>


























<?php
require_once ('../inc/footer.php');
?>