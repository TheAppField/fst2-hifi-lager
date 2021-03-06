<?php
/**
 * Created by PhpStorm.
 * User: Diana Öller
 * Date: 02.06.2018
 * Time: 10:57
 */

class Lieferantenbestellung extends Bestellung {
    public $zahlungsmethodeID;
    public $abgeschlossen;

    public function __construct($bestellungsID, $zugeordnet, $name, $abgeschlossen)
    {
        $this->bestellungsID = $bestellungsID;
        $this->zugeordnet = $zugeordnet;
        $this->name = $name;
        $this->abgeschlossen = $abgeschlossen;
    }

    /**
     * @return mixed
     */
    public function getZahlungsmethodeID()
    {
        return $this->zahlungsmethodeID;
    }

    /**
     * @param mixed $zahlungsmethodeID
     */
    public function setZahlungsmethodeID($zahlungsmethodeID)
    {
        $this->zahlungsmethodeID = $zahlungsmethodeID;
    }

    /**
     * @return mixed
     */
    public function getBestellschein()
    {
        return $this->bestellschein;
    }

    /**
     * @param mixed $bestellschein
     */
    public function setBestellschein($bestellschein)
    {
        $this->bestellschein = $bestellschein;
    }
    public $bestellschein;


    public function getAbgeschlossen()
    {
        return $this->abgeschlossen;
    }

    public function setAbgeschlossen($abgeschlossen)
    {
        return $this->abgeschlossen = $abgeschlossen;
    }

}