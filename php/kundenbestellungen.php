<?php
/**
 * Created by PhpStorm.
 * User: johannes
 * Date: 07.06.18
 * Time: 12:54
 */
include "../models/Bestellung.php";
include "../models/Kundenbestellung.php";
include "../DB.php";
$db = New DB();
$kundenbestellungen = $db->getKundenbestellungen();
$bestellungstable = "";
foreach ($kundenbestellungen as $bestellung) {
    $bestellungstable .= "<tr align = \"center\">
                            <td class=\"hidden-xs\">" . $bestellung->getBestellungsID() . "</td>
                            <td>Offen</td>
                            <td align=\"center\">
                                <a class=\"\" href=\"bestelldetails.php?id=" . $bestellung->getBestellungsID() . "\">
                                    <button class=\"btn fa fa-edit\" ></button>
                                </a>
                            </td>
                          </tr>";
}
echo $bestellungstable;