<?php
require_once ('../inc/header.php');
?>
<div class="container">
    <h1>Inscription</h1>
<form method="POST" action="inc_inscription.php" >

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
</div>

</form>


























<?php
require_once ('../inc/footer.php');
?>