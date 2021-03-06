<?php
/**
 * Created by PhpStorm.
 * User: Diana Öller
 * Date: 02.06.2018
 * Time: 11:20
 */

abstract class Bestellung{
    protected $bestellungsID;
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getBestellungsID()
    {
        return $this->bestellungsID;
    }

    /**
     * @param BestellungsID einer Bestellung (Int)
     */
    public function setBestellungsID($bestellungsID)
    {
        $this->bestellungsID = $bestellungsID;
    }
    public $zugeordnet;

    /**
     * @return KundenID (Int)
     */
    public function getZugeordnet()
    {
        return $this->zugeordnet;
    }

    /**
     * @param KundenID (Int)
     */
    public function setZugeordnet($zugeordnet)
    {
        $this->zugeordnet = $zugeordnet;
    }

    /**
     * Bestellung constructor.
     * @param $bestellungsID
     * @param $zugeordnet
     */
    public function __construct($bestellungsID, $zugeordnet, $name)
    {
        $this->bestellungsID = $bestellungsID;
        $this->zugeordnet = $zugeordnet;
        $this->name = $name;
    }


}