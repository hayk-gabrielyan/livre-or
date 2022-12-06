<?php
    //démarrage de la session
    session_start();
    // connexion à la base de donnée
    include('include/connect_db.php'); 
    
    // if (!$_SESSION['loginOK']) {
    //     header('Location: connexion.php');
    // }
    $login= $_SESSION['login'];
?>

<!-- partie HTML -->
<!DOCTYPE html>
<html>
<head>
<title>Livre d'or</title>
<link rel="stylesheet" href="styles/livre_or-style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

<!-- header des pages -->
<?php include('include/header.php'); ?>
<main>
<section>
    <div>
        <?php
            echo "<p class='Bienvenue'> Bonjour <span id='user'>$login</span> </p>";
        ?>
    </div>
    
    <p id="subTitle">Bienvenue sur notre forum !</p>

<?php
    $request="SELECT login, date, id_utilisateur, commentaire FROM `utilisateurs` ,`commentaires` WHERE utilisateurs.id = id_utilisateur ORDER BY date DESC";
    $exec_request = $connect -> query($request);

    foreach ($exec_request as $row) { // génération des commentaires
        echo '  <div id="commentaire">
                    <h5>posté le ' . $row['date'] . ' par ' . $row['login'] .   '</h5>
                    <p>' . $row['commentaire'] . '</p> 
                </div   >';
    }

?>


    <div class="bold">Souhaitez-vous ajouter un commentaire?</div>
    <a href="commentaire.php"><button class="btn"> Cliquez ici</button></a>

</section>

</main>

<!-- footer des pages et fermeture de la session -->
<?php 
mysqli_close($connect); // fermer la connexion
include('include/footer.php'); 
?>



</body>
</html>


