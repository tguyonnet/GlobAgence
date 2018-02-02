<?php

namespace App\M;

use Core\Object;

class ReservationModel extends Object
{

    protected static $_table = 'reservation';

    protected $id;
    protected $date;
    protected $heureDebut;
    protected $heureFin;
    protected $salle_id;
    protected $ligue_id;

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @return SalleModel
     */
    public function getSalle()
    {
        return new SalleModel($this->salle_id);
    }

    /**
     * @return LigueModel
     */
    public function getLigue()
    {
        return new LigueModel($this->ligue_id);
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }


}