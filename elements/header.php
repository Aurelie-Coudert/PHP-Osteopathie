<?php
require_once 'functions.php';

/* a revoir */ // ===========================================
// Générez un jeton CSRF unique pour la session actuelle
//$csrfToken = bin2hex(random_bytes(32)); // Génération d'un jeton de 32 octets

// Stockez le jeton CSRF dans une variable de session
//session_start();
//$_SESSION['csrf_token'] = $csrfToken;

// Incluez le jeton CSRF dans un formulaire
// ==========================================================

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
    <!-- ACTIVER EN PROD <base href="//www.amelie-briand.fr"> -->
    <meta name="robots" content="index,follow">  <!-- indique aux robots d'indexation des moteurs de recherche qu'ils sont autorisés à indexer la page en question et à suivre les liens qu'elle contient. Cela signifie que la page sera prise en compte dans les résultats de recherche, et que les liens sortants de cette page seront également explorés et pris en compte. -->
    <!-- ACTIVER EN PROD <link rel="canonical" href="https://www.amelie-briand.fr"> -->  <!-- permet de déclarer l'URL principale ou préférée d'une page, aidant ainsi à résoudre les problèmes de contenu en double et à améliorer la visibilité dans les moteurs de recherche. -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- ================================================================================================ -->
    <meta name="author" content="">

    <title><?php if (isset($title)) { echo $title; } else { echo 'Amélie Briand' ; } ?></title>
    <meta property="og:type" content="website"> <!-- L'utilisation de cette balise Open Graph permet de fournir aux plateformes de médias sociaux, en particulier Facebook, des informations sur la nature du contenu de la page.  -->
    <meta property="og:url" content="https://amelie-briand.fr">
    <meta property="og:title" content="Ostéopathe Vallet 44300 | Amélie Briand">
    <meta name="description" content="Ostéopathe à Vallet, Amélie Briand accueille nourrissons, enfants, adolescents, adultes, seniors, femmes enceintes et encore sportifs dans son cabinet pour soulager et soigner vos douleurs aigues et chroniques.">
    <meta property="og:description" content="Ostéopathe à Vallet, Amélie Briand accueille nourrissons, enfants, adolescents, adultes, seniors, femmes enceintes et encore sportifs dans son cabinet pour soulager et soigner vos douleurs aigues et chroniques.">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="script.js"></script> <!-- Lien vers fichier JavaScript -->


    <!-- a revoir
    <meta name="csrf-param" content="authenticity_token"> sécurité pour le formulaire de contact notamment -->
    <!-- <meta name="csrf-token"> --> 


</head>

<body>  
 
<header id="header">
    <div class="container clearfix">
        <div id="et-top-navigation" data-height="190" data-fixed-height="30">
            <nav class="navbar navbar-expand-lg">
                <a class="logo" href="/index.php" onmouseover="changeLogo(true)" onmouseout="changeLogo(false)">
                    <img src="images/logo-normal.png" alt="Logo" id="logo-img" class="logo-image">
                </a>
                <span class="mobile-only">Cabinet Ostéopathie - Amélie Briand</span>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="https://www.doctolib.fr/osteopathe/vallet/amelie-briand" target="_blank"></a>    
                    <span class="navbar-toggler-icon custom-toggler-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?= nav_menu('nav-link') ?>
                    </ul>
                </div>
                <div id="rdv" class="d-grid gap-2">
                    <a href="https://www.doctolib.fr/osteopathe/vallet/amelie-briand" target="_blank">
                        <button class="btn" type="button">Prendre rendez-vous en ligne</button>
                    </a>
                </div>

                
            </nav>
        </div>
    </div>
</header>


</body>
</html>