<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\ConsultantModel;
use App\M\UtilisateurModel;

class ConsultantController extends \Core\Controller {


    static public function listeAction() {
        self::$_view->consultants = ConsultantModel::getAll();
        self::$_view->title = 'Liste des consultants';
    }

    static public function listeClientAction() {
        self::$_view->consultants = ConsultantModel::getAll();
        self::$_view->title = 'Liste des clients des consultants';
    }
}
