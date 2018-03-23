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

    protected $code_bien;
    protected $superficie_bien;
    protected $superficie_terrain;
    protected $prix_hfai;
    protected $nombre_de_piece;
    protected $nombre_de_chambre;
    protected $rue;
    protected $lieu_dit;
    protected $nuumero_batiment;
    protected $numero_appartement;
    protected $codePostal;
    protected $ville;

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$_table;
    }

    /**
     * @return mixed
     */
    public function getCodeBien()
    {
        return $this->code_bien;
    }

    /**
     * @return mixed
     */
    public function getSuperficieBien()
    {
        return $this->superficie_bien;
    }

    /**
     * @return mixed
     */
    public function getSuperficieTerrain()
    {
        return $this->superficie_terrain;
    }

    /**
     * @return mixed
     */
    public function getPrixHfai()
    {
        return $this->prix_hfai;
    }

    /**
     * @return mixed
     */
    public function getNombreDePiece()
    {
        return $this->nombre_de_piece;
    }

    /**
     * @return mixed
     */
    public function getNombreDeChambre()
    {
        return $this->nombre_de_chambre;
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
    public function getLieuDit()
    {
        return $this->lieu_dit;
    }

    /**
     * @return mixed
     */
    public function getNumeroBatiment()
    {
        return $this->nuumero_batiment;
    }

    /**
     * @return mixed
     */
    public function getNumeroAppartement()
    {
        return $this->numero_appartement;
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
    public function getVille()
    {
        return $this->ville;
    }











}
