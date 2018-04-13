<?php

namespace App\C;

use App\M\UtilisateurModel;

class UtilisateurController extends \Core\Controller {



    static public function listeClientAction() {
        self::$_view->utilisateur = UtilisateurModel::getAll();
        self::$_view->title = 'Liste des clients';
    }

    static public function listeClientParConsultantAction() {
        self::$_view->utilisateurs = UtilisateurModel::getAll();
        self::$_view->title = 'Liste des clients d\'un consultant';
    }

    static public function listeConsultantAction() {
        self::$_view->utilisateurs = UtilisateurModel::getAll();
        self::$_view->title = 'Liste des consultantsspo';
    }

}