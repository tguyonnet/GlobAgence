<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class BienModel extends Object
{
    protected static $_table='BIEN';

    protected $id;
    protected $CODE_BIEN;
    protected $CODE_CHARGE;
    protected $CODE_STATUT;
    protected $CODE_EAU;
    protected $CODE_CHAUFFAGE;
    protected $CODE_TYPE_BIEN ;
    protected $SUPERFICIE_BIEN;
    protected $SUPERFICIE_TERRAIN;
    protected $PRIX_HFAI;
    protected $NOMBRE_DE_PIECE;
    protected $NOMBRE_DE_CHAMBRE;
    protected $RUE;
    protected $LIEU_DIT;
    protected $NUMERO_BATIMENT;
    protected $NUMERO_APPARTEMENT;
    protected $CODEPOSTAL;
    protected $VILLE;

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
    public function getCodeBien()
    {
        return $this->CODE_BIEN;
    }

    /**
     * @return mixed
     */
    public function getCodeCharge()
    {
        return $this->CODE_CHARGE;
    }

    /**
     * @return mixed
     */
    public function getCodeStatut()
    {
        return $this->CODE_STATUT;
    }

    /**
     * @return mixed
     */
    public function getCodeEau()
    {
        return $this->CODE_EAU;
    }

    /**
     * @return mixed
     */
    public function getCodeChauffage()
    {
        return $this->CODE_CHAUFFAGE;
    }

    /**
     * @return mixed
     */
    public function getCodeTypeBien()
    {
        return $this->CODE_TYPE_BIEN;
    }

    /**
     * @return mixed
     */
    public function getSuperficieBien()
    {
        return $this->SUPERFICIE_BIEN;
    }

    /**
     * @return mixed
     */
    public function getSuperficieTerrain()
    {
        return $this->SUPERFICIE_TERRAIN;
    }

    /**
     * @return mixed
     */
    public function getPrixHFAI()
    {
        return $this->PRIX_HFAI;
    }

    /**
     * @return mixed
     */
    public function getNombreDePiece()
    {
        return $this->NOMBRE_DE_PIECE;
    }

    /**
     * @return mixed
     */
    public function getNombreDeChambre()
    {
        return $this->NOMBRE_DE_CHAMBRE;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->RUE;
    }

    /**
     * @return mixed
     */
    public function getLieuDit()
    {
        return $this->LIEU_DIT;
    }

    /**
     * @return mixed
     */
    public function getNumeroBatiment()
    {
        return $this->NUMERO_BATIMENT;
    }

    /**
     * @return mixed
     */
    public function getNumeroAppartement()
    {
        return $this->NUMERO_APPARTEMENT;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->CODEPOSTAL;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->VILLE;
    }











}
