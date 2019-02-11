<?php   

/*
UML (UML= schema) : 

* vehicule
--> $litresEssence
-setLitresEssence()
-getLitresEssence()

* pompe
--> $litresEssence
-setLitresEssence()
-getLitresEssence()
-donnerEssence()

Exercice :-Créer un vehicule 1
          -Attribuer un nombre de litres d'essence au vehicule 1 : 5 litres
          -Afficher le nombre de litres d'essence du vehicule 1
          -Creer une pompe
          -Attribuer un nombre de litres à la pompe : 800
          -Afficher le nombre de litres de la pompe
          -la pompe donne de l'essence en faisant le plein , soit 50L, à la voiture 1
          -Afficher le nombre de litres d'essence de la voiture après le ravitaillement
          -Afficher le nombre de litres restant dans la pompe

Pour lier les deux classes, je recupere les proprietes du vehicule :
public function donnerEssence(Vehicule $v)  $v représente l'objet véhicule


Ici j'ai deux classes: vehicule et pompe
j'ai deux methodes: setLitresEssence() et getLitresEssence()
J'ai une fonction donnerEssence()
*/


class Vehicule
{
  private $litresEssence;

  public function setLitresEssence($litres)
  {
    $this->litresEssence=$litres;
  }
  public function getLitresEssence()
  {
    return $this->litresEssence;
  }

}



class Pompe
{
    private $litresEssence;

    public function setLitresEssence($litres)
  {
    $this->litresEssence=$litres;
  }
  public function getLitresEssence()
  {
    return $this->litresEssence;
  }

  public function donnerEssence(Vehicule $v)//reçoit un objet issu de la classe vehicule. $v represente l'objet de type vehicule, c-a-d $vehicule1, et eventuellement les futurs vehicules que je pourrais creer. Du coup nous obtenons l'accès aux méthodes de la classe 'Vehicule' dans la classe 'Pompe' 
  {
    $this->setLitresEssence($this->getLitresEssence()-(50-$v->getLitresEssence()));//les $this ici representent la pompe, soit 800 (valeur de $pompe)
                          
    
    $v->setLitresEssence($v->getLitresEssence()+(50-$v->getLitresEssence()));
  }
}

$vehicule1= new Vehicule;
$vehicule1->setLitresEssence(5);
echo "Ce véhicule contient : <strong><em>" .$vehicule1->getLitresEssence() . " </em></strong>litres d'essence . <br>";

$pompe= new Pompe;
$pompe->setLitresEssence(800);
echo "Il y a <strong><em>" .$pompe->getLitresEssence() . "</em></strong> litres d'essence dans cette pompe <br><hr>";

$pompe->donnerEssence($vehicule1);

echo "Après ravitaillement, le véhicule 1 contient :<strong><em>" .$vehicule1->getLitresEssence() . " </em></strong> litres d'essence.<br>";

echo "Après passage à la pompe du vehicule, il reste <strong><em>" .$pompe->getLitresEssence() . " </em></strong>litres d'essence dans la pompe <br>";
?>