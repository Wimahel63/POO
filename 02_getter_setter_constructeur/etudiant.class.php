<?php   
class Etudiant
{
  private $prenom;            //Mag
  public function __construct($arg)
  {                                                               //Mag
    echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
    return $this->setPrenom($arg);//$arg = Mag
  }
  public function getPrenom()
  {
   return $this->prenom;
  }                         //Mag
  public function setPrenom($arg)
  {
      //tous les contrôles sur les données sont ici
   $this->prenom = $arg;//une fois 'settée', la valeur de $this est renvoyée a la function __construct($arg)
   //$this->prenom= $arg; est l'equivalent de $etudiant->prenom='Mag';
  }
}
//------------------------------------------------------------
$etudiant = new Etudiant('Mag');
echo '<pre>'; var_dump($etudiant); echo '</pre>';
/* ce var_dump me renvoie :
Instanciation, nous avons reçu l'information suivante : Mag

object(Etudiant)#1 (1) {
  ["prenom":"Etudiant":private]=>
  string(3) "Mag"
}

L'argument passé dans new Etudiant('') est stocké dans le $arg, la function __construct($arg) se lance automatiquement, dès lors que l'argument est setté

Nous mettons un argument apres le nom de la classe qui atterit directement dans le constructeur ex : $bdd= new PDO ('mysql:host=localhost; dbname=nomdelabdd', 'root', ''); PDO est un objet qui recoit en argument les identifiants de la bdd
*/

//$this correspond ici à $etudiant. On s'en sert pour pouvoir utiliser en dehors la methode qui est normalement en private

echo "Prenom : " .$etudiant->getPrenom().'<br>';
/* retour du echo : Prenom : Mag
le ->getPrenom me permet d'acceder a la donnee et de l'exploiter (affichage, enregistrement en bdd dans le VALUES d'un INSERT...) . Le getter ne permet cependant pas d'y inserer qqch*/

$etudiant->__construct('Julie');
echo "Prenom : " .$etudiant->getPrenom().'<br>';
/* renvoie :
Instanciation, nous avons reçu l'information suivante : Julie
Prenom : Julie

le constructeur peut tout de même être appelé comme une méthode classique
*/
 
$etudiant->setPrenom('Yvette');//dans cet exemple, on ne passe pas par le constr, on envoie direct au setter
echo "Prenom : " .$etudiant->getPrenom().'<br>';
/* retour : Prenom : Yvette 
Pour controler ma donnee j'utilise un set*/

/*
exemple d'insertion : c'est le getter qui permettrait d'exploiter la donnée finale et , par ex, de l'inserer dans la bdd :
$bdd->exec("INSERT INTO employes (prenom) VALUES ($etudiant->getPrenom()));

__construct() est une methode magique qui s'execute automatiquement, elles sera alors l'equivalent su init.php avec session_start(), connexion a la bdd, autoload ...
Il se charge d'envoyer automatiquement la donnée dans le setter. On peut y mettre plusieurs arg

* setter : permet de contrôler les données
* getter: permet de voir / contrôler les données finales
* private $prenom : la propriété est privée afin que l'on ne puisse pas la remplir à l'extérieur de la classe sans avoir fait des contrôles au préalable, c-a-d sans être passé par les getter-setter au préalable
 Dans notre cas, lorsque l'on instancie la classe, les donnees vont directement au setter, le construc se charge d'envoyer les donnees direct au setter. C'est une sécurité en plus, on sait que les données vont direct au setter et ne vont pas n'importe où.

Si nous avions un formulaire avec 2 champs, j'aurai autant de getter et de setter qu'il y a de champs --> 20champs = 20 setters et 20 getters



*/





?>