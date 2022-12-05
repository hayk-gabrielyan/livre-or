<?php session_start();

//protection contre l'acces direct par url
if (!$_SESSION['loginOK']) {
    header('Location: connexion.php');
}

// rappel des variable contenant les informations de l'utilisateur
$login = $_SESSION['login'];
$password = $_SESSION['password'];

var_dump($login);
var_dump($password);

// connexion à la base de donnée
include('include/connect_db.php'); 

// si le bouton est appuyée
if(isset($_POST['submit'])) {
    $commentaire = $_POST['commentaire'];
    var_dump($commentaire);
    $requete = "INSERT INTO commentaires ( commentaire, id_utilisateur, date) VALUES ('$commentaire','1', CURRENT_TIMESTAMP());";
    var_dump($requete);
    $exec_requete = $connect -> query($requete);
    var_dump($exec_requete);
} 


mysqli_close($connect); // fermer la connexion
?>

<!-- partie HTML -->
<!DOCTYPE html>
<html>
<head>
<title>Ajout de commentaire</title>
<link rel="stylesheet" href="styles/add_comment-style.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!-- partie PHP qui affiche l'erreur de utilisateur existant ou mot de passes qui correspondent pas -->
<?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1){
            echo "<center><p style='color:red'>Commentaire non enregistré</p></center>";
        }
    }
?>

<!-- footer des pages -->
<?php include('include/footer.php'); ?>



</body>
</html>


