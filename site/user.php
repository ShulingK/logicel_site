<?php require_once "php/config.php" ?>
<html lang="fr">
<?php include('./components/head.html'); ?>
<body> 
<?php 
include('./components/header.html');
    if(isset($_SESSION["user"])){
        ?><h1>je t'aime<h1>
            <a class="spacing" href="php/logout.php">Déconnexion</a>
            <?php
    }else{?>
        <div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="connect">
                <h2>SE CONNECTER</h2>
            </div>
            <div class="connect">
                <form method="post" action="php/login.php">
                    <p>E-mail</p>
                    <input type='email' name='email' />
                    <p>Mot de passe</p>
                    <input type='password' name='password' />
                    <input type='submit' value='Me connecter' />
                </form>
            </div>
            <div class="conditions">
                <p>En continuant, vous acceptez les Conditions d’utilisation et reconnaissez avoir lu notre Politique de confidentialité. Informations concernant la collecte de données</p>
                <a href="registerview.php">Vous n'êtes pas encore inscrit? Inscrivez-vous</a>
            </div>
        </div>
    </div>
    <?php
include('./components/footer.html');
}?>
</body>
</html>