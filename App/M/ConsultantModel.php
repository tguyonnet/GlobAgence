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
    protected static $_table = 'consultants';

    protected $code_droit;
    protected $id;
    protected $nom;
    protected $prenom;
    protected $zone;
    protected $nbreBiensAffectes;


    /**
     * @return mixed
     */
    public function getCodeDroit()
    {
        return $this->code_droit;
    }



    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @return mixed
     */
    public function getNombreDeBiensAffectes()
    {
        return $this->nbreBiensAffectes;
    }

    /**
     * @return mixed
     */
    public function getNombreDeBiensVendus()
    {
        return $this->nombreDeBiensVendus;
    }

    /**
     * @return mixed
     */
    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }

    public function getTable()
    {
        return $this->_table;
    }




}
