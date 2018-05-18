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

    static public function formAction() {
        self::$_view->consultants = UtilisateurModel::getAll();
        self::$_view->title = 'Formulaire d\'ajout de consultant';
    }


    static public function queryFormAction($params)
    {

        // Recupére tous les biens de la BDD
        self::$_view->utilisateur = UtilisateurModel::getAll();
        self::$_view->title = 'Consultant ajouté';
        $unNouveauConsultant = new UtilisateurModel();
        $unNouveauConsultant->setNom($params["nom"]);
        $unNouveauConsultant->setPrenom($params["prenom"]);
        $unNouveauConsultant->setDateNaissance($params["dateNaissance"]);
        $unNouveauConsultant->setEmail($params["email"]);
        $unNouveauConsultant->setTelephone($params["telephone"]);
        $unNouveauConsultant->setRue($params["rue"]);
        $unNouveauConsultant->setVille($params["ville"]);
        $unNouveauConsultant->setCodePostal($params["codePostal"]);
        $unNouveauConsultant->store();
    }
//
}