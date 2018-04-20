<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\M\BienModel;

class BienController extends \Core\Controller {

    static public function formAction() {
        self::$_view->biens = BienModel::getAll();
        self::$_view->title = 'Formulaire des Biens';
    }

    static public function listeAction() {
        self::$_view->biens = BienModel::getAll();
        self::$_view->title = 'Liste des Biens';
    }

    static public function listeClientAction() {
        self::$_view->biens = BienModel::getAll();
        self::$_view->title = 'Accueil - GlobAgence Immo';
    }
    static public function queryFormAction($params){

        // Recupère tous les biens de la BDD
        self::$_view->biens = BienModel::getAll();
        $unNouveauBien = new BienModel();
        $unNouveauBien->setVille($params["ville"]);
        $unNouveauBien->setCodePostal($params["codePostal"]);
        $unNouveauBien->store();




       /*
        self::$_view->ville = $params["ville"];
        self::$_view->codePostal = $params["codePostal"];
        self::$_view->rue = $params["rue"];
        self::$_view->numeroAppartement = $params["numeroAppartement"];
        self::$_view->lieuDit = $params["lieuDit"];
        self::$_view->supreficieBien = $params["superficieBien"];
        self::$_view->superficieTerrain = $params["superficieTerrain"];
        self::$_view->prixHFAI = $params["prixHFAI"];
        self::$_view->numerobatiment = $params["numerobatiment"];
        self::$_view->typeBienId = $params["typeBienId"];
        self::$_view->nombrePieces = $params["nombrePieces"];
        self::$_view->nombreChambres = $params["nombreChambres"];
        self::$_view->biens = BienModel::getAll();
        self::$_view->title = 'Formulaire achevé';
       */
    }
    /*
        static public function validFormAction($params){
        self::$_view->biens = $params["validForm"];
        self::$_view->biens = BienModel::getAll();
        self::$_view->title = 'Formulaire envoyé';
    }
    */
}