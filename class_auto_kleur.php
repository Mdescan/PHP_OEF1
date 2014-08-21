<?php
class Auto {
    private $kleur;
    private $aantalDeuren;
    private $verbruik;
    public function setKleur($kleur){
        $this->kleur=$kleur;
    }
    public function setAantalDeuren($aantal){
        $this->aantalDeuren=$aantal;
    }
    public function setVerbruik($hoeveelheid){
        $this->verbruik=$hoeveelheid;
    }

    public function getKleur() {
        return $this->kleur;
    }
    public function getAantalDeuren() {
        return $this->aantalDeuren;
    }
    public function getVerbruik() {
        return $this->verbruik;
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $Lotus = new Auto();
            $Ferari = new Auto();
            $Opel = new Auto();
            
            $Lotus->setAantalDeuren(2);
            $Lotus->setKleur('yellow');
            $Lotus->setVerbruik(3.4);
            
            $Ferari->setAantalDeuren(2);
            $Ferari->setKleur('red');
            $Ferari->setVerbruik(4.5);
            
            $Opel->setAantalDeuren(4);
            $Opel->setKleur('grey');
            $Opel->setVerbruik(2.5);
            
            print "the Lotus got : ";
            print $Lotus->getAantalDeuren();
            print " Doors";
            print "<br/>";
            print "the Opel got : ";
            print $Opel->getAantalDeuren();
            print " Doors";
            
        ?>
    </body>
</html>
