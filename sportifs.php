<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Sportifs";
$nav = "sportifs";
require 'elements/header.php'; 
?>

<div class="main-conteur">
    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/sportifs.jpg" alt="sportifs2">
            <div class="media-body">
                <h5>Sportifs</h5>
                <p>Les sportifs consultent pour des douleurs articulaires et musculaires, des entorses, des contractures musculaires, des tendinites, la préparation physique, la récupération et la gestion de blessures récurrentes.</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>

</div>

<?php require 'elements/footer.php'; ?>