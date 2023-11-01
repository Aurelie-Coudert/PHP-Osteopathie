<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Séniors";
$nav = "seniors";
require 'elements/header.php'; 
?>

<div class="main-conteneur">

    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/seniors.jpg" alt="seniors">
            <div class="media-body">
                <h5>Séniors</h5>
                <p>Les séniors peuvent bénéficier de l'ostéopathie pour soulager des douleurs articulaires, l'arthrose, les maux de tête, les vertiges, les troubles du sommeil et pour améliorer leur confort général.</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>

</div>

<?php require 'elements/footer.php'; ?>