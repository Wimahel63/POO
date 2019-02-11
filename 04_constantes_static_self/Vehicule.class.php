<?php     

class Vehicule
{
   private static $marque = 'BMW';//la propriete static n'appartient pas a l'objet mais a la classe, ce qui veut dire que tous les arguments suivants la premiere instanciation seront affectés. C'est la class elle-même qui sera modifiée
   private $couleur = 'noire';
   public static function setMarque($marque) //si ma propriete est static, ma fonction doit etre static egalement
   {
      self::$marque = $marque;//on appelle une propriete static dans la classe en passant par self
   }
   public function getMarque()
   {
      return self::$marque;
   }
   public function setCouleur($couleur)
   {
      $this->couleur=$couleur;
   }
   public function getCouleur()
   {
       return $this->couleur;
   }
}

$vehicule1= new Vehicule;
echo "Vehicule 1 de marque :<strong> " .Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule1->getCouleur() . "</strong><br><hr>";

$vehicule2= new Vehicule; 
$vehicule2->setCouleur("rouge");
echo "Vehicule 2 de marque :<strong> " .Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule2->getCouleur() . "</strong><br><hr>";


$vehicule3= new Vehicule; 
echo "Vehicule 3 de marque :<strong> " .Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule3->getCouleur() . "</strong><br><hr>";

$vehicule4= new Vehicule;
Vehicule::setMarque('Dodge Viper');//comme je modifie la classe, j'ecris Vehicule::setMarque();
echo "Vehicule 4 de marque :<strong> " .Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule4->getCouleur() . "</strong><br><hr>";

$vehicule5= new Vehicule;
echo "Vehicule 5 de marque :<strong> " .Vehicule::getMarque() . "</strong> et de couleur <strong>" . $vehicule5->getCouleur() . "</strong><br><hr>";

//lorsque la propriete est static, je pointe a l'exterieur de ma class avec :: alors que mes propriétes non statics je les appelle avec -> . A l'interieur des class, j'utiliserai $this pour des proprietes non-static et self:: pour les statics

/* un élément déclaré comme static appartient à la class et non à l'objet. Si je modifie un élément static, je modifie la classe elle-même
$objet-> élément d'un objet à l'extérieur de la classe
$this-> élément d'un objet à l'intérieur de la classe
class:: élément de la classe à l'extérieur de la classe
self:: élément de la classe à l'intérieur de la classe
*/





?>