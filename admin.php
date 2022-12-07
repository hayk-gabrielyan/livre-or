<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>admin</title>
<link rel="stylesheet" href="styles/admin.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
</head>
<body>
<!--header des pages-->
<?php include('include/header.php'); 
        include 'include/connect_db.php';
?>

<main>
    <section>
            <div class="Bienvenue">Bienvenue <?php echo $_SESSION['login'];?></div>
            <p>Voici la liste de tous les utilisateurs.</p>
            <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom d'utilisateur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $request = "SELECT * FROM utilisateurs";
                            $exec_request = $connect -> query($request);
                            while(($result = $exec_request -> fetch_assoc()) != null)
                            {
                                echo "<tr>";
                                echo "<td>".$result['id']."</td>";
                                echo "<td>".$result['login']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
    </section>
</main>
<!--footer des pages-->
<?php include('include/footer.php'); ?>

</body>
</html>