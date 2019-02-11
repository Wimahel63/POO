<?php   
class Panier 
{
  public $nbProduits;
  public function ajouterArticle(){
      return "L'article a bien été ajouté";
  }
  protected function retirerArticle(){
      return "L'article a été retiré";
  }
  private function affichageArticle(){
      return "Voici les articles";
  }
}

//pour instancier une class, j'utilise le mot cle new, et un objet prend , par convention, une majuscule
$panier1 = new Panier;
echo '<pre>'; var_dump($panier1); echo '</pre>';

/*le var_dump me retourne : 
object(Panier)#1 (1) {
    ["nbProduit"]=>
    NULL
  }
On observe un objet issu de la classe 'Panier' avec l'identifiant 1 (reference de l'objet)

*/
echo '<pre>'; var_dump(get_class_methods($panier1)); echo '</pre>';

/* ce var_dump me retourne : 
array(1) {
    [0]=>
    string(14) "ajouterArticle"
  }
get_class_methods() est une fonction prédéfinie permettant d'observer les methodes issues d'une classe
*/

$panier1->nbProduits = 5;
echo '<pre>'; print_r($panier1); echo '</pre>';
/*ce print_r me retourne :
Panier Object
(
    [nbProduits] => 5
)
On voit ici que j'ai modifié le nb de prduit par rapport a la condition de depart
*/

echo "Nombre de produits dans le panier : " . $panier1->nbProduits.  '<br>';//on pioche une propriété de la classe à travers l'objet, pas de parentheses, c'est une propriété / définie en propriete 'public'
echo "Panier1 >" . $panier1->ajouterArticle() .'<br>';//on pioche une méthode de la classe à travers l'objet, des parenthese, c'est une methode / methode 'public'
/*ce code retourne sur ma page:
Nombre de produits dans le panier : 5
Panier1 >L'article a bien été ajouté
*/


/*echo "Panier1 >" . $panier1->retirerArticle() .'<br>';
ce code me retourne : 
Fatal error: Uncaught Error: Call to protected method Panier::retirerArticle() from context '' in C:\xampp\htdocs\POO\01_classe_objet_instance_visibilite\Panier.class.php:54 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\01_classe_objet_instance_visibilite\Panier.class.php on line 54
Dans ce cas l'erreur est normale car la methode utilisée est 'protected' , elle n'est donc accessible et utilisable que DANS la classe déclarée et dans ses classes héritées, mais pas en dehors de cette classe ou des héritières*/

/*echo "Panier1 >" . $panier1->affichageArticle() .'<br>';
ce code me renvoie : 
Fatal error: Uncaught Error: Call to private method Panier::affichageArticle() from context '' in C:\xampp\htdocs\POO\01_classe_objet_instance_visibilite\Panier.class.php:61 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\01_classe_objet_instance_visibilite\Panier.class.php on line 61
L'élément est accessible uniquement dans la classe où je l'ai déclaré, pas en dehors NI dans des classes héritières, c'est la méthode 'private'
*/

//pour comprendre,prenons le cas d'une voiture: on peut imaginer que la class est le plan de la voiture, l'objet est la voiture elle-même

$panier2= new Panier;
echo '<pre>'; var_dump($panier2); echo '</pre>';
/*retour du var_dump:
object(Panier)#2 (1) {
    ["nbProduits"]=>
    NULL
  }

je m'aperçois que mon id s'incremente, mais ma proriete est vide, car elle appartient a l'objet et non à la class, il ne prend pas en compte les modifications des autres objets, puisqu'il ne leur appartient pas*/

$panier2->nbProduits= 3;
echo "Nombre de produits dans le panier 2 : " . $panier2->nbProduits.  '<br>';

/*code retour du echo:
Nombre de produits dans le panier 2 : 3
Ici j'ai bien une modification car j'ai apporté une valeur à mon objet*/

/* RESUME : 
  -public : accessible de partout
  -protected : accessible dans la class mère et dans ses heritières
  -private : accessible uniquement dans la class mère déclarée

   'new' est un mot-clé permettant d'effectuer une instanciation . Une class peut produire plusieurs objets. Nous pouvons effectuer plusieurs instanciations 'new' .
   $panier1 représente l'objet issu de la classe 'Panier'. La classe est le plan de construction, $panier1 représente un exemplaire de la classe 

*/
















?>