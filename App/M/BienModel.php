<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class BienModel extends Object
{
    protected static $_table='bien';

    protected $charge_id;
    protected $chauffage_id;
    protected $codePostal;
    protected $eau_id;
    protected $id;
    protected $lieuDit;
    protected $nombreChambres;
    protected $nombrePieces;
    protected $numeroAppartement;
    protected $numerobatiment;
    protected $prixHFAI;
    protected $rue;
    protected $statut_id;
    protected $superficieBien;
    protected $superficieTerrain;
    protected $typeBien_id;
    protected $ville;

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
    public function getChargeId()
    {
        return $this->charge_id;
    }

    /**
     * @return mixed
     */
    public function getChauffageId()
    {
        return $this->chauffage_id;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @return mixed
     */
    public function getEauId()
    {
        return $this->eau_id;
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
    public function getLieuDit()
    {
        return $this->lieuDit;
    }

    /**
     * @return mixed
     */
    public function getNombreChambres()
    {
        return $this->nombreChambres;
    }

    /**
     * @return mixed
     */
    public function getNombrePieces()
    {
        return $this->nombrePieces;
    }

    /**
     * @return mixed
     */
    public function getNumeroAppartement()
    {
        return $this->numeroAppartement;
    }

    /**
     * @return mixed
     */
    public function getNumeroBatiment()
    {
        return $this->numerobatiment;
    }

    /**
     * @return mixed
     */
    public function getPrixHFAI()
    {
        return $this->prixHFAI;
    }

    /**
     * @return mixed
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @return mixed
     */
    public function getStatutId()
    {
        return $this->statut_id;
    }

    /**
     * @return mixed
     */
    public function getSuperficieBien()
    {
        return $this->superficieBien;
    }

    /**
     * @return mixed
     */
    public function getSuperficieTerrain()
    {
        return $this->superficieTerrain;
    }

    /**
     * @return mixed
     */
    public function getTypeBienId()
    {
        return $this->typeBien_id;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $charge_id
     */
    public function setChargeId($charge_id)
    {
        $this->charge_id = $charge_id;
    }

    /**
     * @param mixed $chauffage_id
     */
    public function setChauffageId($chauffage_id)
    {
        $this->chauffage_id = $chauffage_id;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @param mixed $eau_id
     */
    public function setEauId($eau_id)
    {
        $this->eau_id = $eau_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $lieuDit
     */
    public function setLieuDit($lieuDit)
    {
        $this->lieuDit = $lieuDit;
    }

    /**
     * @param mixed $nombreChambres
     */
    public function setNombreChambres($nombreChambres)
    {
        $this->nombreChambres = $nombreChambres;
    }

    /**
     * @param mixed $nombrePieces
     */
    public function setNombrePieces($nombrePieces)
    {
        $this->nombrePieces = $nombrePieces;
    }

    /**
     * @param mixed $numeroAppartement
     */
    public function setNumeroAppartement($numeroAppartement)
    {
        $this->numeroAppartement = $numeroAppartement;
    }

    /**
     * @param mixed $numerobatiment
     */
    public function setNumerobatiment($numerobatiment)
    {
        $this->numerobatiment = $numerobatiment;
    }

    /**
     * @param mixed $prixHFAI
     */
    public function setPrixHFAI($prixHFAI)
    {
        $this->prixHFAI = $prixHFAI;
    }

    /**
     * @param mixed $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @param mixed $statut_id
     */
    public function setStatutId($statut_id)
    {
        $this->statut_id = $statut_id;
    }

    /**
     * @param mixed $superficieBien
     */
    public function setSuperficieBien($superficieBien)
    {
        $this->superficieBien = $superficieBien;
    }

    /**
     * @param mixed $superficieTerrain
     */
    public function setSuperficieTerrain($superficieTerrain)
    {
        $this->superficieTerrain = $superficieTerrain;
    }

    /**
     * @param mixed $typeBien_id
     */
    public function setTypeBienId($typeBien_id)
    {
        $this->typeBien_id = $typeBien_id;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }










}
