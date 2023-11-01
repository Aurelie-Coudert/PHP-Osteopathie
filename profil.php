<?php
$nom = null;
/* ======================================================= */
if (!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
    unset($_COOKIE['utilisateur']);
    /* pour supprimer définitivement le cookie : */ 
    setcookie('utilisateur', '', time() - 10);
}
/* ======================================================= */
if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
/* ======================================================= */
if (!empty($_POST['nom'])) {
    setcookie('utilisateur', $_POST['nom']); 
    $nom = $_POST['nom'];
}
/* ======================================================= */
require 'elements/header.php';
?>

<!-- Si l'utilisateur a rentré son nom, afficher Bonjour Untel, sinon envoyer le formulaire -->
<?php if ($nom): ?>
    <h4>Bonjour <?= htmlentities($nom) ?> !</h4>
    <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" name="nom" placeholder="Entrez votre nom">
        </div>
        <button class="btn btn-primary">Se connecter</button>
    </form>
<?php endif; ?>

<?php require 'elements/footer.php'; ?>