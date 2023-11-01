<?php
    function nav_item (string $lien, string $titre, string $linkClass = ''): string
    {
        $classe = 'nav-item';
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe .= ' active';
        }
        return <<<HTML
        <li class="$classe">
            <a class="$linkClass" href="$lien">$titre</a>
        </li>
HTML;
    }

    function nav_menu (string $linkClass = ''): string
    {
        return 
            nav_item('index.php', 'Accueil', $linkClass) .
            nav_item('amelie-briand.php', 'Qui suis-je ?', $linkClass) .
            nav_item('osteopathie.php', 'Ostéopathie', $linkClass) . 
            nav_item('consultation.php', 'Consultation', $linkClass) . 
            nav_item('honoraires.php', 'Honoraires', $linkClass) . 
            nav_item('articles.php', 'Articles', $linkClass) .
            nav_item('contact.php', 'Contact', $linkClass);
    }

    function creneaux_html (array $creneaux) {
         //condition pour vérifier les éventuels jours de fermeture (si tableau vide, alors indiquer "Fermé")
         if (empty($creneaux)) {
            return 'Fermé';
        }
        // ========================================================
        $phrases = [];
        // ========================================================
        foreach ($creneaux as $creneau) {
            $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        }
        return implode(' & ', $phrases);
    }

    function in_creneaux (int $heure, array $creneaux): bool
    /* vérifier si le cabinet est ouvert ou fermé en fonction du jour actuel et de l'heure*/
    {
         foreach ($creneaux as $creneau) {
            $debut = $creneau[0];
            $fin = $creneau[1];
            
            if ($heure >= $debut && $heure < $fin) {
                return true;
            }
         }
         return false;
    }
?> 