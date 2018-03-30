<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/03/18
 * Time: 15:14
 */

namespace App\M;

use Core\Object;


class ConsultantModel extends Object
{
    protected static $_table = 'UTILISATEUR';

    protected $id;
    protected $nom;
    protected $prenom;
    protected $zone;
    protected $nombreDeBiensEnVente;
    protected $nombreDeBiensVendus;
    protected $chiffreAffaire;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getZone()
    {
        return $this->zone;
    }

    public function getNombreDeBiensEnVente()
    {
        return $this->nombreDeBiensEnVente;
    }

    public function getNombreDeBiensVendus()
    {
        return $this->nombreDeBiensVendus;
    }

    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }


}
