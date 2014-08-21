<?php
class Auto {
    private $name;
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
    public function setCarName($name) {
        $this->name=$name;
        
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
    public function getName() {
        return $this->name;
        
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
            
            print "Met dit project spelen we een beetje met de class/object parameters";
            print "<br/>";
            
            print "<h3><u>Eerste test</u></h3>";
            
            print "the Lotus got : ";
            print $Lotus->getAantalDeuren();
            print " Doors";
            print "<br/>";
            print "the Opel got : ";
            print $Opel->getAantalDeuren();
            print " Doors";
            
            print "<br/>";
            print "<br/>";
            
            print "hierna gaan we nog een stapje verder we gaan er nu nog een functie bij plakken om de naam van de auto toe te kennen"
            . "alsook om hem opteroepen en maken een artikel over aanprijzing van wagens";
            
            
            
            
            $Lotus->setCarName('Lotus');
            $Ferari->setCarName('Ferari');
            $Opel->setCarName('Opel');
            
            print "<h3><u>Tweede speel versie</u></h3>";
            
            print "onze eerste aanbieding is een ";
            print $Lotus->getName();
            print "<br/>";
            print "deze wagen heeft ";
            print $Lotus->getAantalDeuren();
            print "<br/>";
            print " deuren. Is in het ";
            print $Lotus->getKleur();
            print "<br/>";
            print " gespoten. met een verbruil van ";
            print $Lotus->getVerbruik();
            print " liter/kilometer";
            
            print "<br/>";
            print "<br/>";
            
            print "onze eerste aanbieding is een ";
            print $Ferari->getName();
            print "<br/>";
            print "deze wagen heeft ";
            print $Ferari->getAantalDeuren();
            print "<br/>";
            print " deuren. Is in het ";
            print $Ferari->getKleur();
            print "<br/>";
            print " gespoten. met een verbruil van ";
            print $Ferari->getVerbruik();
            print " liter/kilometer";
            
            print "<br/>";
            print "<br/>";
            
            print "onze eerste aanbieding is een ";
            print $Opel->getName();
            print "<br/>";
            print "deze wagen heeft ";
            print $Opel->getAantalDeuren();
            print "<br/>";
            print " deuren. Is in het ";
            print $Opel->getKleur();
            print "<br/>";
            print " gespoten. met een verbruil van ";
            print $Opel->getVerbruik();
            print " liter/kilometer";
        ?>
    </body>
</html>
