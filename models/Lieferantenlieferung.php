<?php
/**
 * Created by PhpStorm.
 * User: Diana Öller
 * Date: 02.06.2018
 * Time: 10:52
 */

class Lieferantenlieferung extends Lieferung {
    //public $ablehnen;
    public $status;


    public function __construct($lieferungsID,$bestellungsID,$datum,$lieferschein)
    {
        parent::__construct($lieferungsID,$bestellungsID,$datum,$lieferschein);
        //$this->uebernahmeschein = $uebernahmeschein;
        $this->status="offen";
        //$this->ablehnen = null;
    }


}