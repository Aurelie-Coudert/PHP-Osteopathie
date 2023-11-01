<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Enfants";
$nav = "enfants";
require 'elements/header.php'; 
?>

<div class="main-conteneur">

    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/enfants2.jpg" alt="enfants2">
            <div class="media-body">
                <h5>Enfants</h5>
                <p> L'ostéopathie peut aider en cas d'affection ORL, scoliose, troubles digestifs, lors du port d'un appareil orthodontique, semelles orthopédiques, séquelles de traumatismes (chute, fracture, luxation, entorse ...), bilan de croissance…</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>

</div>

<?php require 'elements/footer.php'; ?>