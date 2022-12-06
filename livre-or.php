<?php
    //démarrage de la session
    session_start();
    // connexion à la base de donnée
    include('include/connect_db.php'); 
    
    if (!$_SESSION['loginOK']) {
        header('Location: connexion.php');
    }
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
                            <div class="Bienvenue">Bienvenue <?php echo $_SESSION['login'];?></div>
                            <p>Voici la liste de tous les commentaires.</p>


                            <table>
                                    <thead>
                                        <tr>
                                            <th>Créé par</th>
                                            <th>Nom d'utilisateur</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $request="SELECT login, date, id_utilisateur, commentaire FROM `utilisateurs` ,`commentaires` WHERE utilisateurs.id = id_utilisateur ORDER BY date DESC";
                                            
                                            //$request = "SELECT * FROM commentaires ORDER BY date DESC;";
                                            $exec_request = $connect -> query($request);
                                            while(($result = $exec_request -> fetch_assoc()) != null)
                                            {
                                                echo "<tr>";
                                                echo "<td>".$result['login']."</td>";
                                                echo "<td>".$result['commentaire']."</td>";
                                                echo "<td>".$result['date']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>


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


