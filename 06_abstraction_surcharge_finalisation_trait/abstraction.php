<?php     
//les classes abstraites ne peuvent pas etre instanciées, on doit leur donner une héritière. Elles nous servent à poser les "fondements " de notre code, à pousser les developpeurs à déclarer correctement  les class avec les bons noms. Pour déclarer des methodes abstraites, il faut que la class elle-même soit abstraite. On liste les methodes dont on va avoir besoin mais on ne les declare pas, on laisse les dev le faire de la bonne manière.
/*En résumé: 
 -Les methodes abstraites n'ont pas de contenu
-Lorsque l'on herite de methodes abstraites, nous sommes obligés de les redefinir  (cf exemple plus bas)
-pour definir des methodes abstraites, il est necessaire que la class qui les contient soit abstraite

Le developpeur qui ecrit la classe 'Joueur' est au coeur de l'application (noyau) et va obliger les autres developpeurs à redefinir les methodes EtreMajeur() et Devise(). C'est une bonne methode de travail , on impose de bonnes contraintes*/


abstract class Joueur
{
    public function seConnecter()
    {
        return $this->EtreMajeur();
    }
    abstract public function EtreMajeur();
    abstract public function Devise();
}


class JoueurFr extends Joueur
{
   public function EtreMajeur()
   {
       return 18;
   }
   public function Devise()
   {
       return "€";
   }
}

class JoueurUs extends Joueur
{
    public function EtreMajeur()
   {
       return 18;
   }
   public function Devise()
   {
       return "€";
   }
}


// $joueur=new Joueur;
// echo $joueur->seConnecter() .'<br>';
/*retour echo :  
Fatal error: Uncaught Error: Cannot instantiate abstract class Joueur in C:\xampp\htdocs\POO\06_abstraction_surcharge_finalisation_trait\abstraction.php:26 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\06_abstraction_surcharge_finalisation_trait\abstraction.php on line 26
Cette erreur est normal, car il n'est pas possible d'instancier une classe abstraite
*/

$joueurFr=new JoueurFr;
echo "<pre>"; var_dump(get_class_methods($joueurFr)); echo "</pre>";
/* retour var_dump:
array(3) {
    [0]=>
    string(10) "EtreMajeur"
    [1]=>
    string(6) "Devise"
    [2]=>
    string(11) "seConnecter"
  }
  */
//echo "Pour acceder au jeu , il faut avoir " .$joueurFr->EtreMajeur() . " ans et payer en   " .$joueurFr->Devise() ;
// retour echo :pour acceder au jeu , il faut avoir 18 ans et payer en €

//on peut aussi pointer sur seConnecter(), ça fonctionne egalement:
//echo "Pour acceder au jeu , il faut avoir " .$joueurFr->seConnecter() . " ans et payer en   " .$joueurFr->Devise() ;
//retour: Pour acceder au jeu , il faut avoir 18 ans et payer en €

$joueurUs= new JoueurUs;
echo "Pour acceder au jeu , il faut avoir " .$joueurUs->seConnecter() . " ans et payer en   " .$joueurUs->Devise() ;
/*retour echo :
Fatal error: Class JoueurUs contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods (Joueur::EtreMajeur, Joueur::Devise) in C:\xampp\htdocs\POO\06_abstraction_surcharge_finalisation_trait\abstraction.php on line 31
 retour sans avoir redclarer mes methodes dans ma class*/
 
$joueurUs= new JoueurUs;
echo "Pour acceder au jeu , il faut avoir " .$joueurUs->seConnecter() . " ans et payer en   " .$joueurUs->Devise() ;
/*retour echo apres avoir redeclaré mes methodes dans la class JoueurUs :Pour acceder au jeu , il faut avoir 18 ans et payer en €

 |->Tant que mes methodes ne sont pas declarées dans ma nouvelle cl   ass, j'aurai une erreur de retour. Il faut que je les redeclare a chaque nouvelle class*/
?>