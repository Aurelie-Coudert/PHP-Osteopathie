<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Adultes";
$nav = "adultes";
require 'elements/header.php'; 
?>

 
    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/adultes2.jpg" alt="adultes2">
            <div class="media-body">
                <h5>Adultes</h5>
                <p>Les adultes peuvent consulter pour diverses raisons, notamment des douleurs chroniques telles que les douleurs cervicales et lombaires, des douleurs aiguës comme les lumbagos et les torticolis, des maux de tête, des troubles digestifs (ballonnements, remontées acides), des tensions musculaires dans les épaules, ou des suites d'interventions chirurgicales.</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>



<?php require 'elements/footer.php'; ?>