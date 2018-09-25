<?php
/**
 * PHP Test File
 */
class Raumschiff_Fabrik {
    public $geschwindigkeit;
    public $schild;
    public $name;


    public function setName($neuer_name) {
        $this->name = $neuer_name;
        echo "name geändert \n";}
}

$schiff_1 = new Raumschiff_fabrik();
$schiff_2 = new Raumschiff_fabrik();

$schiff_1 ->setName('carni'); // dieses Objekt ist gerade aktiv und nur seine name wird verändert

