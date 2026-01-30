<?php $title = 'Login'?>
<?php ob_start(); ?>

<h1>Se connecter</h1>

<form action="">
    <label for="courriel">Courriel</label>
    <br>
    <input type="text">
    <br>
    <label for="mdp">Mot de passe</label>
    <br>
    <input type="text">
    <br>
    <input type="checkbox"> Se souvenir de moi
    <br>
    <button type="submit">Se connecter</button>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>