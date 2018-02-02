<?php
/**
 * Date: 30/01/18
 * Time: 13:25
 */

namespace App\M;


use Core\Object;

// Représente une ligne de la table salle 
class SalleModel extends Object
{
    protected static $_table='salle';

    protected $id;
    protected $libelle;
    protected $nbPlaces;

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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return mixed
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }



}