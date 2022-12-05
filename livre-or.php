<?php
    session_start();
    include('include/connect_db.php'); // connexion à la base de donnée
    
    if (!$_SESSION['loginOK']) {
        header('Location: connexion.php');
    }

    mysqli_close($connect); // fermer la connexion
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
<body>

<!-- header des pages -->
<?php include('include/header.php'); ?>
<main>
<section>
    <div class="bold">Souhaitez-vous ajouter un commentaire?</div>
    <a href="add_comment.php"><button class="btn"> Cliquez ici</button></a>

</section>

</main>

<!-- footer des pages -->
<?php include('include/footer.php'); ?>



</body>
</html>


