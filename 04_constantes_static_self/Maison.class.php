<?php     

class Maison
{
    private static $nbPiece = 7;
    public static $espaceTerrain= '500m';
    public $couleur = 'blanc';
    const HAUTEUR ='10m';
    private $nbPorte = 10;
    public static function getNbPiece()
    {
        return self::$nbPiece;
    }
    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}

/* exercice : 
-Afficher le nb de pieces de la maison
-Afficher l'espace terrain de la maison
-Afficher la hauteur de la maison
-Afficher la couleur de la maison
-Afficher le nb de portes de la maison

static ::
non static $this->

Une constante se déclare toujours en majuscules et appartient à la classe ex fetch(PDO::FETCH_ASSOC)
*/

$maison= new Maison;
echo  "la maison possede " .Maison::getNbPiece() . " pieces, avec " . $maison->getNbPorte() ." portes, elle est située sur un terrain de " . Maison::$espaceTerrain . " , est de couleur " .$maison->couleur. " et d'une hauteur de " . Maison::HAUTEUR;
//ce dernier exemple, Maison::HAUTEUR;  est basé sur le même principe que (PDO::FETCH_ASSOC) : ce sont des constantes


/*echo $maison::$espaceTerrain; cette syntaxe fonctionne, mais elle ne doit pas être utilisée pour raisons de sécurité. Elle ne devrait en effet pas fonctionner et renvoyer une erreur, car elle permettrait des failles dans la sécurité.

echo $maison->getNbPiece(); comme l'exemple précédent, cet exemple fonctionne mais ne le devrait pas, car la methode est static, il faudrait l'appeler avec la classe et non l'objet

echo $maison->espaceTerrain; ce code renvoie une erreur, car je ne dois pas appeler une propriete static avec un objet
Notice: Accessing static property Maison::$espaceTerrain as non static in C:\xampp\htdocs\POO\04_constantes_static_self\Maison.class.php on line 42
Notice: Undefined property: Maison::$espaceTerrain in C:\xampp\htdocs\POO\04_constantes_static_self\Maison.class.php on line 42


echo Maison::$couleur;  ne passe pas: 
Fatal error: Uncaught Error: Access to undeclared static property: Maison::$couleur in C:\xampp\htdocs\POO\04_constantes_static_self\Maison.class.php:44 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\04_constantes_static_self\Maison.class.php on line 44
En effet, on ne doit pas appeler une propriété public par la classe
*/





?>