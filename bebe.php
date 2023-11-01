<?php 
session_start(); 
$_SESSION['role'] = 'administrateur';
$title = "Pratique Nourrissons";
$nav = "bebe";
require 'elements/header.php'; 
?>

<div class="main-conteneur">
    <div class="container clearfix">

        <div class="card-pratique">
            <img class="card-img-left" src="images/bebe2.jpg" alt="bebe2">
            <div class="media-body">
                <h5>Nourrissons / Bébés</h5>
                <p> Lors de la vie intra utérine, et au moment de l'accouchement, le corps du bébé va subir de nombreuses contraintes.</p>
                <p><em>Principaux motifs de consultation :</em> Reflux gastro oesophagien, coliques, régurgitations, trouble de la digestion (diarrhée / constipation), trouble du sommeil, difficulté lors de la succion, troubles ORL (sinusites, otites), torticolis, plagiocéphalie (lorsque le bébé tourne toujours sa tête du même côté), un bébé qui ne supporte pas d'être allongé sur le dos ou sur le ventre ... ou tout simplement pour un bilan post partum.<br>
                Puis lors des différents étapes clefs de sa croissance : passage à la position assise, l'apprentissage du 4 pattes, puis de la marche.</p>
                <button type="button" class="btn btn-info" id="retour-button"><a href="osteopathie.php">Retour</a></button>
            </div>	
        </div>
          
    </div>

</div> 

<?php require 'elements/footer.php'; ?>