<?php       
/* exercice : 
-Faire en sorte de ne pas avoir d'objet Vehicule
    * en la mettant en abstract par ex: abstract class Vehicule{}

-Obligation pour la renault et la peugeot de posseder la meme methode demarrer() qu'un vehicule de base
   *avec un final ,par ex : final public function demarrer() {}
   
-Obligation pour la renault de declarer un carburant diesel et pour la peugeot de declarer un carburant essence
   *avec un abstract : abstract public function carburant(){}

-La renault doit effectuer 30 test de plus qu'un vehicule de base
   *avec des surcharges : public function nbDeTestsObligatoires()
   {
       return parent::nbDeTestsObligatoires() +30;
   }

-La peugeot doit effectuer 70 tests de plus qu'un vehicule de base
-Effectuer les affichages necessaires
     *$peugeot = new Peugeot;
echo "Peugeot : " . $peugeot->demarrer() . " et je dois faire " .$peugeot->nbDeTestsObligatoires() . " tests obligatoires, et je roule à l' " .$peugeot->carburant() . "<br>";

$renault= new Renault;
echo "Renault : ". $renault->demarrer() . " et je dois faire " .$renault->nbDeTestsObligatoires() . " tests obligatoires, et je roule au " .$renault->carburant() . "<br>";


*/

abstract class Vehicule
{
    final public function demarrer()
    {
        return "je demarre";
    }
    abstract public function carburant();
    
    public function nbDeTestsObligatoires()
    {
        return 100;
    }
}

class Peugeot extends Vehicule
{
   
   public function carburant()
   {
       return  "essence";
   } 
   public function nbDeTestsObligatoires()
   {
       return parent::nbDeTestsObligatoires() + 70;
   }
}

class Renault extends Vehicule
{
   public function carburant()
   {
       return "diesel";
   }
   public function nbDeTestsObligatoires()
   {
       return parent::nbDeTestsObligatoires() + 30;
   }
}

$peugeot = new Peugeot;
echo "Peugeot : " . $peugeot->demarrer() . " et je dois faire " .$peugeot->nbDeTestsObligatoires() . " tests obligatoires, et je roule à l' " .$peugeot->carburant() . "<br>";

$renault= new Renault;
echo "Renault : ". $renault->demarrer() . " et je dois faire " .$renault->nbDeTestsObligatoires() . " tests obligatoires, et je roule au " .$renault->carburant() . "<br>";

/*Peugeot : je demarre et je dois faire 170 tests obligatoires, et je roule à l' essence
Renault : je demarre et je dois faire 130 tests obligatoires, et je roule au diesel
*/








?>