<?php
    include('include/connect_db.php'); // connexion à la base de donnée
?>

<!DOCTYPE html>
<html>
<head>
<title>Accueil</title>
<link rel="stylesheet" href="styles/style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
</head>
<body>
<!--header des pages-->
<?php include('include/header.php'); ?>
<main>
<section>
    <div class="left_block">
        <div class="Bienvenue">Bienvenue sur le forum</div>
            <div class="chez">
                <div >de</div>
                <img src="img/logo_black_letters.png" class="accueil-logo">
            </div>
            <div id="conseil">Conseil et expertise en Système d'information</div>
    </div>
    <div class="right_block">
        <div>Connectez-vous à votre compte</div>
        <a href="connexion.php"><button class="button green">Se connecter</button></a>
        <div>Pas encore inscrit?</div>
        <a href="inscription.php"><button class="button orange">S'inscrire</button></a>
    </div>
</section>

</main>
<!--footer des pages-->
<?php include('include/footer.php'); ?>
</body>
</html>