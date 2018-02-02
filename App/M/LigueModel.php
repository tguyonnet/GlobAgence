<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class LigueModel extends Object
{
    protected static $_table='ligue';

    protected $id;
    protected $libelle;
    protected $nbEmployes;
    protected $nbMembres;
    protected $subventionRecue;

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
    public function getNbEmployes()
    {
        return $this->nbEmployes;
    }

    /**
     * @return mixed
     */
    public function getNbMembres()
    {
        return $this->nbMembres;
    }

    /**
     * @return mixed
     */
    public function getSubventionRecue()
    {
        return $this->subventionRecue;
    }




}