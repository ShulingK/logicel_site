<?php require_once "php/config.php" ?>
<html lang="fr">
<?php include('./components/head.html')?>
<body>
<?php include('./components/header.html')?>

<div class="use row">
        <div class="connection col l4 offset-l4 ">
            <div class="connect">
                <h2>S'INSCRIRE</h2>
            </div>
            <div class="connect">
                <form method="post" action="php/register.php">
                    <p>Prénom</p>
                    <input type='text' name='first_name' />
                    <p>Nom</p>
                    <input type='text' name='name' />
                    <p>E-mail</p>
                    <input type='email' name='email'/>
                    <p>Mot de passe</p>
                    <input type='password' name='password' />
                    <input type='submit' value='Créer un compte' />
                </form>
            </div>
            <div class="conditions">
                <p>En continuant, vous acceptez les Conditions d’utilisation et reconnaissez avoir lu notre Politique de confidentialité. Informations concernant la collecte de données</p>
                <a href="user.php">Vous êtes déja inscrit? Connectez-vous</a>
            </div>
        </div>
</div>
    <?php include('./components/footer.html')?>
</body>
</html>