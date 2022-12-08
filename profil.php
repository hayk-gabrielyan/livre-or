<?php
// démarrer une session
session_start();
include 'include/header.php';
include 'include/connect_db.php';

// récupéer les valeurs de session
$login = $_SESSION['login'];
$password = $_SESSION['password'];

// modifier les informations
// requete pour récupérer les infos de la DB
$catchInfos = $connect->query("SELECT login, password FROM utilisateurs WHERE login = '$login'");
$displayInfos = $catchInfos->fetch_all();

// si le formulaire est envoyé
if (isset($_POST['submit'])) {
    // les post deviennent les nouvelles valeurs
    $confpwd = ($_POST['confpwd']);
    $newpwd2 = ($_POST['newpwd2']);
    $newpwd = ($_POST['newpwd']);
    $newlogin = ($_POST['login']);

    // si l'ancien pwd est le bon et que les nouveaux pwd correspondent
    if (($confpwd == $password) && ($newpwd == $newpwd2)) {
        // faire la requete de mise à jour de la db avec les nouvelles valeurs
        $upInfo = $connect->query("UPDATE utilisateurs SET login ='$newlogin', password = '$newpwd' WHERE login='$login'");
        echo "Les modifications ont bien été prises en compte";
        // et sauver les nouvelles valeurs
        $_SESSION['login'] = $newlogin;
        $_SESSION['pwd'] = $newpwd;
        header('Location: profil.php?erreur=1');
    } else {
        header('Location: profil.php?erreur=2');
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/profile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <title>Modification de profil</title>
</head>

<body>


<main>
    <section>

        <form action="profil.php" method="POST">
        <div class="container">
            <div class="bold register">Formulaire de modification de vos informations</div>
            <hr>

            <label for="login" class="bold">Changer le nom d'utilisateur</label>
            <input type="text" placeholder="Saissisez ici le nouveau nom d'utilisateur ..." name="login"  value="<?=$login?>" required >

            <label for="confpwd" class="bold">Ancien mot de passe</label>
            <input type="password" name ="confpwd"  value="" placeholder="Entrez votre ancien mot de passe" >

            <label for="newpwd" class="bold">Nouveau mot de passe</label>
            <input type="password" name="newpwd" placeholder="Saissisez ici le nouveau mot de passe ..."  required  >

            <label for="newpwd2" class="bold">Confirmer le nouveau mot de passe</label>
            <input type="password" name="newpwd2" placeholder="Confirmer ici le nouveau mot de passe ..."  required  >
            <hr>

            <button type="submit" name="submit" class="registerbtn">Enregistrer les modifications</button>

        </form>

        <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1){
                    echo "<center><p style='color:green'>Modifications enregisrées</p></center>";
                }
                if($err==2){
                    echo "<center><p style='color:red'>Mot de passe invalid</p></center>";
                }
            }
        ?>

    </section>
</main>
<?php include 'include/footer.php';?>

</body>

</html>