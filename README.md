# GlobAgence
Projet SLAM ( Janvier-Mai )

https://github.com/bmontassier/GlobAgence.git


function html_user_menu($user_id) {
	#1
	// $menu : tableau associatif à plusieurs dimension
	// $html : string
	$html = '';

	#2
    if (!is_array($user_id)) {
        $user = bdd_user_getOne($user_id);
    }

// Menu par defaut
$menu['.?module=default&page=dashboard'] = 'Accueil';

// Menu du responsable départemental
    if ($user['droits_id'] == 1) {
        $menu['.?module=responsableDepartemental&page=listeCasernes'] = 'Liste des casernes';
        $menu['.?module=responsableDepartemental&page=listeResponsablesCaserne'] = 'Liste des responsables';
    }
// Menu du responsable de caserne
		if ($user['droits_id'] == 2) {
        $menu['.?module=responsableCaserne&page=afficherGarde'] = 'Afficher la feuille de garde';
        $menu['.?module=responsableCaserne&page=createGarde'] = 'Nouvelle feuille de garde';
				$menu['.?module=pompiers&page=listePompiers'] = 'Liste des pompiers';
				$menu['.?module=responsableCaserne&page=listeEngins'] = 'Liste des engins';
    }
// Menu d'un pompier volontaire
		if ($user['droits_id'] == 3) {
        $menu['.?module=pompierVolontaire&page=mesDisponibilites'] = 'Mes disponibilités';
        $menu['.?module=pompierVolontaire&page=mesGardes'] = 'Mes gardes';
    }
// Menu de root (usersio)
		if ($user['droits_id'] == 5) {
			$menu['.?module=responsableDepartemental&page=listeCasernes'] = 'Liste des casernes';
			$menu['.?module=responsableDepartemental&page=listeResponsablesCaserne'] = 'Liste des responsables';
			$menu['.?module=responsableCaserne&page=afficherGarde'] = 'Afficher la feuille de garde';
			$menu['.?module=responsableCaserne&page=createGarde'] = 'Nouvelle feuille de garde';
			$menu['.?module=pompiers&page=listePompiers'] = 'Liste des pompiers';
			$menu['.?module=responsableCaserne&page=listeEngins'] = 'Liste des engins';
			$menu['.?module=pompierVolontaire&page=mesDisponibilites'] = 'Mes disponibilités';
			$menu['.?module=pompierVolontaire&page=mesGardes'] = 'Mes gardes';
    }


    // Ici, on s'occupe de préparer l'affichage du menu en HTML
    foreach ($menu as $href => $text) {

        if (is_array($text)) {
            $style='style="display:none"';
            if(isset($_GET['module']) and $_GET['module']==$href){
                $style='';
            }
            $html .= '<li onclick="$(this).next().toggle()">' . $text['name'] . '</li><ul '.$style.'>';

            foreach ($text['items'] as $href => $li) {
                $html .= '<li onclick="window.location.href=\'' . $href . '\'"><a href="' . $href . '">' . $li . '</a></li>';
            }
            $html .= '</ul>';
        } else {
            $html .= '<li onclick="window.location.href=\'' . $href . '\'"><a href="' . $href . '">' . $text . '</a>'
                    . '</li>';
        }
    }
    #3
    return $html;
}

