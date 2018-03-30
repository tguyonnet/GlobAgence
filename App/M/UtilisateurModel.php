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
    protected static $_table='UTILISATEUR';

    protected $id;
    protected $code_droit;
    protected $password;
    protected $nom;
    protected $prenom;
    protected $date_naissance;
    protected $email;
    protected $telephone;
    protected $rue;
    protected $ville;
    protected $code_postal;





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
    public function getCODE_DROIT()
    {
        return $this->CODE_DROIT;
    }

    /**
     * @return mixed
     */
    public function getPASSWORD()
    {
        return $this->PASSWORD;
    }

    /**
     * @return mixed
     */
    public function getNOM()
    {
        return $this->NOM;
    }

    /**
     * @return mixed
     */
    public function getSubventionRecue()
    {
        return $this->subventionRecue;
    }


    /**
     * @return mixed
     */
    public function getPRENOM()
    {
        return $this->PRENOM;
    }


    /**
     * @return mixed
     */
    public function getDATE_NAISSANCE()
    {
        return $this->DATE_NAISSANCE;
    }


    /**
     * @return mixed
     */
    public function getEMAIL()
    {
        return $this->EMAIL;
    }


    /**
     * @return mixed
     */
    public function getTELEPHONE()
    {
        return $this->TELEPHONE;
    }


    /**
     * @return mixed
     */
    public function getRUE()
    {
        return $this->RUE;
    }


    /**
     * @return mixed
     */
    public function getVILLE()
    {
        return $this->VILLE;
    }



    /**
     * @return mixed
     */
    public function getCODE_POSTAL()
    {
        return $this->CODE_POSTAL;
    }


}