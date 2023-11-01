<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Femmes Enceintes";
$nav = "grossesse";
require 'elements/header.php'; 
?>

<div class="main-conteneur">
 
    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/grossesse2.jpg" alt="grossesse2">
            <div class="media-body">
                <h5>Femmes Enceintes</h5>
                <p>Pendant la grossesse, les changements physiologiques et mécaniques peuvent provoquer ou aggraver des douleurs préexistantes. Les motifs courants de consultation comprennent la sciatique, la sciatalgie ou d'autres névralgies, les troubles digestifs (ballonnements, constipation, remontées acides), les troubles circulatoires, la fatigue, le stress, et la préparation du bassin avant l'accouchement. Un bilan post-accouchement est également possible.</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>

</div>

<?php require 'elements/footer.php'; ?>