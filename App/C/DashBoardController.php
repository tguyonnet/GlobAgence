<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\SalleModel;
use App\M\LigueModel;

/**
 * Description of DashBoardController
 *
 * @author usersio
 */
class DashBoardController extends \Core\Controller {

    static public function listeAction() {
        self::$_view->salles = new \ArrayObject(SalleModel::getAll()); // Renvoie un tableau indexé d'objets de la classe Salle Model, transformé en ArrayObject utile pour la suite
        self::$_view->ligues = new \ArrayObject(LigueModel::getAll());
        self::$_view->title = 'Tableau de bord';
    }

    static public function loginAction() {

        self::$_view->title = 'Connexion';
        // recuperation des email et password issue de la classe utilisateurModel
        // verification des données email et password, s'ils appartiennent bien à la classe utilisateurModel
        // soit il appartient et ok renvoie page d'accueil(c=dashboard et a = liste) , sinon renvoie a la page de connexion ()



    }

}
