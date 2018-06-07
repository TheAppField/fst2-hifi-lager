<?php
/**
 * Created by PhpStorm.
 * User: johannes
 * Date: 07.06.18
 * Time: 13:23
 */

class Lagerlog
{
    /**
     * @return mixed
     */
    public function getArtikelID()
    {
        return $this->artikelID;
    }

    /**
     * @return mixed
     */
    public function getAnzahl()
    {
        return $this->anzahl;
    }

    /**
     * @return mixed
     */
    public function getLieferungsID()
    {
        return $this->lieferungsID;
    }

    /**
     * @return mixed
     */
    public function getAenderung()
    {
        return $this->aenderung;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }
    public $artikelID;
    public $bezeichnung;
    public $anzahl;
    public $lieferungsID;
    public $aenderung;
    public $datum;

    /**
     * @return mixed
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Lagerlog constructor.
     * @param $artikelID
     * @param $anzahl
     * @param $lieferungsID
     * @param $aenderung
     * @param $datum
     */
    public function __construct($artikelID,$bezeichnung, $anzahl, $lieferungsID, $aenderung, $datum)
    {
        $this->artikelID = $artikelID;
        $this->bezeichnung = $bezeichnung;
        $this->anzahl = $anzahl;
        $this->lieferungsID = $lieferungsID;
        $this->aenderung = $aenderung;
        $this->datum = $datum;
    }


}