<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Amélie BRIAND";
$nav = "index";
require 'elements/header.php'; 
?>

<div class="main-conteneur">
    <div class="container clearfix">

        <div class="bandeau">
            <h4>Amélie BRIAND - Cabinet d'Ostéopathie à Vallet <br>
            Prenez rendez-vous en ligne sur <a href="https://www.doctolib.fr/osteopathe/vallet/amelie-briand" target="_blank">Doctolib</a>  ou au <a href="tel:0611766285">06.11.76.62.85.</a></h4>
        </div>

        <div class="card-index">
            <img class="card-img-index" src="images/monstera.jpg" alt="bienvenue" style="max-width: 400px; max-height: 400px;">
            <div class="media-body">
                <h3>Bienvenue au cabinet d'ostéopathie !</h3>
                <p>Je suis ravie de vous accueillir au sein de la<strong> <a href="https://www.facebook.com/LaSourceMaisonDeLaSanteEtDuBienEtre/" target="_blank">Source à Vallet</a></strong>, espace de soins dédié à la santé et au bien-être..</p>
                <p>Mon approche thérapeutique est basée sur une <b>vision globale</b> du patient, prenant en compte votre <b>historique médical</b> et vos <b>besoins spécifiques</b> pour vous aider à retrouver votre santé.</p>
                <p>J’utilise diverses <a href="amelie-briand.php"><b>techniques</b></a> pour rétablir la mobilité tissulaire de votre corps et relancer son potentiel d'auto-guérison. Je m’attache à comprendre la cause de votre motif de consultation pour <b>résoudre le problème à son origine</b>.</p>
                <p>Je suis là pour vous <b>accompagner</b> dans votre rétablissement, <b>soulager</b> vos douleurs et tensions tout en jouant un rôle de <b>prévention</b>.</p>
                <p>Les séances d'<b><a href="osteopathie.php">ostéopathie</a></b> se déroulent avec bienveillance, non-jugement et confidentialité.</span></p>
                <p>N'hésitez pas à me contacter par téléphone pour toute question ou prendre rendez-vous directement en ligne <a href="/contact.php"><strong>ici</strong></a>.</p>
                <p>Au plaisir de vous rencontrer !</p>
                <a href="amelie-briand.php"><em><b>Amélie</b></em></a></p>
            </div>	
        </div>
    </div>
</div>


<?php require 'elements/footer.php'; ?>


