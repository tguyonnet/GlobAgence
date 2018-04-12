<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\BienModel;
use App\M\SalleModel;
use App\M\LigueModel;
use App\M\UtilisateurModel;

/**
 * Description of DashBoardController
 *
 * @author usersio
 */
class DashBoardController extends \Core\Controller {

    static public function listeAction() {
        self::$_view->biens = new \ArrayObject(BienModel::getAll()); // Renvoie un tableau indexé d'objets de la classe Salle Model, transformé en ArrayObject utile pour la suite
        //self::$_view->ligues = new \ArrayObject(LigueModel::getAll());
        self::$_view->title = 'Tableau de bord';
    }

    static public function loginAction() {
        self::$_view->title = 'Connexion';

    }

    static public function verifLoginAction($params) {

        self::$_view->title = 'VerifLogin';
        // recuperation des email et password issue de la classe utilisateurModel
        $utilisateurs = new \ArrayObject(UtilisateurModel::getAll());

        $options = ['cost' => 12];
        $passwordHash = password_hash($params['password'], PASSWORD_BCRYPT, $options);

        // verification des données email et password, s'ils appartiennent bien à la classe utilisateurModel
        self::$_view->authentification = False;
        foreach ($utilisateurs as $utilisateur)
        {
            if ($params["email"]== $utilisateur->getEMAIL() and $passwordHash == $utilisateur->getPASSWORD())
            {
                self::$_view->authentification = True;
                $_SESSION["nom"] = $utilisateur->getNOM();
            }

        }
    }

}
