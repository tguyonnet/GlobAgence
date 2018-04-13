<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/03/18
 * Time: 15:14
 */

namespace App\M;

use Core\Object;

class UtilisateurModel extends Object
{
    protected static $_table='utilisateur';

    protected $id;
    protected $droit_id;
    protected $password;
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $email;
    protected $telephone;
    protected $rue;
    protected $ville;
    protected $codePostal;
    protected $consultant_id;





    public static function whereConsultant_id()
    {
        return consultant_id;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->_table;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDroit_id()
    {
        return $this->droit_id;
    }

    /**
     * @return mixed
     */
    public function getPASSWORD()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getNOM()
    {
        return $this->nom;
    }


    /**
     * @return mixed
     */
    public function getPRENOM()
    {
        return $this->prenom;
    }


    /**
     * @return mixed
     */
    public function getDATENAISSANCE()
    {
        return $this->dateNaissance;
    }


    /**
     * @return mixed
     */
    public function getEMAIL()
    {
        return $this->email;
    }


    /**
     * @return mixed
     */
    public function getTELEPHONE()
    {
        return $this->telephone;
    }


    /**
     * @return mixed
     */
    public function getRUE()
    {
        return $this->rue;
    }


    /**
     * @return mixed
     */
    public function getVILLE()
    {
        return $this->ville;
    }



    /**
     * @return mixed
     */
    public function getCODEPOSTAL()
    {
        return $this->codePostal;
    }



    /**
     * @return mixed
     */
    public function getConsultantId()
    {
        return $this->consultant_id;
    }




}