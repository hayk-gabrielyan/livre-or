<?php
    include('include/connect_db.php'); // connexion à la base de donnée
?>

<!DOCTYPE html>
<html>
<head>
<title>Accueil</title>
<link rel="stylesheet" href="styles/style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
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
            <p>Conseil et expertise en Système d'information</p>
    </div>
    <div class="right_block">
        <div>Connectez-vous à votre compte</div>
        <a href="connexion.php"><button class="button green">Se connecter</button></a>
        <div>Pas encore inscrit?</div>
        <a href="inscription.php"><button class="button orange">S'inscrire</button></a>
    </div>
</section>

<p id="connInst">Inscrivez ou connectez vous pour laisser un commentaire.</p>

<?php
    $request="SELECT login, date, id_utilisateur, commentaire FROM `utilisateurs` ,`commentaires` WHERE utilisateurs.id = id_utilisateur ORDER BY date DESC";
    $exec_request = $connect -> query($request);

    foreach ($exec_request as $row) { // génération des commentaires
        
        echo '  <div id="commentaire">
                    <h5>posté le ' . $row['date'] . ' par ' . $row['login'] .   '</h5>
                    <p>' . $row['commentaire'] . '</p> 
                </div>';
                
    }

?>

</main>
<!--footer des pages-->
<?php include('include/footer.php'); ?>
</body>
</html>