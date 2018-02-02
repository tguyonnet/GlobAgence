<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\SalleModel;

class SalleController extends \Core\Controller {

    static public function listeAction() {
        self::$_view->salles = SalleModel::getAll();
        self::$_view->title = 'Liste des salles';
    }    
}
