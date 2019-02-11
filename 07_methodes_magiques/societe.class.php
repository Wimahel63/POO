<?php      

class Societe
{
    public $adresse;
    public $ville;
    public $cp;

    public function __set($nom, $valeur)
    {
        echo "la propriete <strong>$nom</strong> n'existe pas, la valeur <strong>$valeur</strong> n'a donc pas été affectée";
    }//__set est une methode magique qui se déclenche uniquement en cas de tentative d'affectation sur une propriété qui n'existe pas
    public function __get($nom)
    {
        echo "La propriete $nom n'existe pas, on ne peut pas l'afficher <hr>";
    }//__get est une methode magique qui s'execute uniquement en cas de tentative d'affichage d'une propriete qui n'existe pas, donc que nous n'avons pas declarée
    public function __call($nom, $argument)
    {
        echo "la  methode $nom n'existe pas, les arguments etaient :" . implode("-",$argument). "<br>";
    }//__call() est une methode magique qui s'execute uniquement en cas de tentative d'execution d'une méthode qui n'existe pas, donc qui n'a pas été declarée

}



$societe1= new Societe;
$societe1->villes ="Paris";//tentative d'affectation à une propriété qui n'existe pas, qui n'a pas été declarée
echo '<pre>'; var_dump($societe1); echo '</pre>';
/*
object(Societe)#1 (4) {
  ["adresse"]=>
  NULL
  ["ville"]=>
  NULL
  ["cp"]=>
  NULL
  ["villes"]=>
  string(5) "Paris"
}
-----> ce code apparait avec une erreur volontaire à 'villes' : php cree alors une nouvelle propriete.
Pour palier a ça, on utilise une fonction magique:
function __set($nom, $valeur){}
    Apres avoir definit cette methode magique, mon echo me retourne : 
    la propriete villes n'existe pas, la valeur Paris n'a donc pas été affectée

*/
echo $societe1->titre;
/* Notice: Undefined property: Societe::$titre in C:\xampp\htdocs\POO\07_methodes_magiques\societe.class.php on line 36
 Pour eviter cette erreur j'utilise __get($nom).
 
 public function __get($nom)
    {
        echo "La propriete $nom n'existe pas, on ne peut pas l'afficher <hr>";
    }
 Lorsque j'utilise cette methode, ma page me renvoie : 
 La propriete titre n'existe pas, on ne peut pas l'afficher 
 */

 echo $societe1->grggrgfg(1,2,3);
 /*Fatal error: Uncaught Error: Call to undefined method Societe::grggrgfg() in C:\xampp\htdocs\POO\07_methodes_magiques\societe.class.php:54 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\07_methodes_magiques\societe.class.php on line 54
Ici on a une tentative d'execution d'une methode qui n'a pas été declarée
Pour eviter ce cas, j'utilise __call(), et en retour j'obtiens : 
 la methode grggrgfg n'existe pas, les arguments etaient :1-2-3

 */

//Il y a trop d'erreurs "sales" en php, les méthodes magiques permettent d'afficher des erreurs "propres" en français et non sous forme de Fatal error 



?>