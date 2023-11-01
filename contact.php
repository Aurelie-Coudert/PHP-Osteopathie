<?php 
session_start();
$title = "Contact";
require_once 'data/config.php';
require_once 'functions.php';

// Récupérer le fuseau horaire adéquat:
date_default_timezone_set('Europe/Paris'); 

// Récupérer l'heure d'aujourd'hui pour savoir si le cabinet est ouvert
$heure = (int)date('G');

// Récupérer les créneaux d'ouvertures d'aujourd'h ui
$creneaux = CRENEAUX[date('N') - 1];

// Voir si le cabinet est ouvert ou non
$ouvert = in_creneaux($heure, $creneaux);

/* Si le cabinet est ouvert, afficher les horaires en vert, sinon en rouge */
$color = $ouvert ? 'green' : 'red';

require 'elements/header.php'; 
?>

<!-- Afficher les heures d'ouverture du cabinet  -->

<div class="main-conteneur">

    <div class="container clearfix">

        <div>

            <div class="contacter">
           <!--      <h4>Nous contacter : </h4> -->

                    <p><strong>Amélie BRIAND</strong>
                        <br>OSTEOPATHE D.O.
                        <br>
                        <br>Cabinet La Source
                        <br>31 Rue François Luneau
                        <br>44330 VALLET
                        <br>
                        <br><strong>Sur RDV</strong>
                        <br>Téléphone : <a href="tel:0611766285">06.11.76.62.85.</a>
                    </p>      
            </div>

            <div class="formulaire">
                <p><strong>Formulaire de contact :</strong> </p>
                    <form action="traitement.php" method="post">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required><br><br>

                        <label for="email">E-mail :</label>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="4" required></textarea><br><br>

                        <input type="submit" value="Envoyer">
                    </form>
            </div>

            <div>
                <p><strong>Horaires d'ouvertures du cabinet :</strong></p>

                <!-- // Si le cabinet est ouvert, afficher ceci :  -->
                <?php if ($ouvert): ?>
                    <div class="alert alert-success">
                        Le cabinet est actuellement ouvert.
                    </div>
                <!-- Sinon :  -->
                <?php else: ?> 
                <!-- // Si le cabinet est fermé, afficher ceci :  -->
                    <div class="alert alert-danger">
                        Le cabinet est actuellement fermé.
                    </div>
                <?php endif; ?>

                <ul>
                    <?php foreach(JOURS as $k => $jour): ?>
                        <!-- Vérifier quel jour on est et mettre en surbrillance les horaires d'ouverture correspondants -->
                        <li <?php if ($k + 1 === (int)date('N')): ?> style="color:<?= $color; ?>" <?php endif; ?>>
                        <!-- Indication de jours et horaires d'ouvertures : -->
                            <strong><?= $jour ?></strong> :
                            <?= creneaux_html(CRENEAUX[$k]); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

    </div>
</div>

<?php require 'elements/footer.php'; ?>

