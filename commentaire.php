<?php session_start();

// connexion à la bdd
include('include/connect_db.php'); 

// //protection contre l'acces direct par url
// if (!$_SESSION['loginOK']) {
//     header('Location: connexion.php');
// }

// déclaration des variables contenant les informations de l'utilisateur
$login = $_SESSION['login'];
$password = $_SESSION['password'];


//recuperation de l'id d'utilisateur de la bdd
$resultat= mysqli_query($connect, "SELECT  id from utilisateurs WHERE login='$login'");

$row = mysqli_fetch_array($resultat);	
$id_user=$row['id'];

// si le bouton est appuyée
if(isset($_POST['submit'])) {
	$commentaire = $_POST['commentaire'];
    $commentaire= mysqli_real_escape_string($connect, $commentaire);
	$query1 = "INSERT INTO commentaires (`commentaire`, `id_utilisateur`, `date`) VALUES ('".$commentaire."', '$id_user', CURRENT_TIMESTAMP());";		
	mysqli_query($connect, $query1);
    $_SESSION['commentaire']=$_POST['commentaire'];
	header('Location: livre-or.php');
}
?>



<!-- partie HTML -->
<!DOCTYPE html>
<html>
<head>
<title>Ajout de commentaire</title>
<link rel="stylesheet" href="styles/commentaire-style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
</head>
<body>

<!-- header des pages -->
<?php include('include/header.php'); ?>
<main>
<section>

    <form action="" method="POST">

        <div class="container">
            <div class="bold">Ajouter un commentaire</div>
            <hr>
            <textarea type="text" placeholder="Saissisez votre commentaire ici ..." name="commentaire" required></textarea>
            <hr>

            <button type="submit" name="submit" class="registerbtn">Publier le commentaire</button>
        </div>

    </form>
</div>
</section>

</main>

<!-- footer des pages -->
<?php 
mysqli_close($connect); // fermer la connexion
include('include/footer.php'); 
?>



</body>
</html>


