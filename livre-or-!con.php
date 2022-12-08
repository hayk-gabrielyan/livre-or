<?php
    //démarrage de la session
    // connexion à la base de donnée
    include('include/connect_db.php'); 
?>

<!-- partie HTML -->
<!DOCTYPE html>
<html>
<head>
<title>Livre d'or</title>
<link rel="stylesheet" href="styles/livre_or-style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
</head>
<body >

<!-- header des pages -->
<?php include('include/header.php'); ?>
<main>
<section>
    <div>
        Bienvenue sur le forum de livre d'or !
    </div>

    <?php
    $request="SELECT login, date, id_utilisateur, commentaire FROM `utilisateurs` ,`commentaires` WHERE utilisateurs.id = id_utilisateur ORDER BY date DESC";
    $exec_request = $connect -> query($request);

    foreach ($exec_request as $row) { // génération des commentaires
    echo ' 
        <div id="commentaire">
            <div >
                <h5>Posté le ' .$row['date'] . '   Par :  ' . $row['login'] .'</h5>
            </div>
            <div >
                <p>' .$row['commentaire'] . '</p> 
            </div>
        </div>';
    }

?>

</main>

<!-- footer des pages et fermeture de la session -->
<?php 
mysqli_close($connect); // fermer la connexion
include('include/footer.php'); 
?>



</body>
</html>


