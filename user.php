<?php session_start();?>

<?php
    // rappel des variable contenant les informations de l'utilisateur
    $login = $_SESSION['login'];
    $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html>
<head>
<title>user</title>
<link rel="stylesheet" href="styles/user.css" />
<link rel="icon" type="image/x-icon" href="img/logo-onglet.svg">
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
</head>
<body>

<!-- header des pages -->
<?php include('include/header.php'); ?>

<main>
    <section>
        <div>Bienvenue
            <?php 
                echo "<span id='user'>$login</span>";
            ?> 
        </div>
</main>

<!-- footer des pages -->
<?php include('include/footer.php'); ?>

</body>
</html>