<?php    

class Singleton
{
    public $numero=20;
    private static $instance = null;
    private function __construct()//comme il est private, il ne peut pas s'executer
    {

    }
    private function __clone()//l'objet ne sera pas clonable car il est en private, donc la classe n'est pas instanciable, mais c'est le but recherché, c'est donc normal
    {

    }
    public static function getInstance()
    {
      if(is_null(self::$instance))//si $instance est null, la premiere fois est null, mais les autres fois non, je ne rentrerais donc pas dans cette condition car il y aura bien l'objet dans instance 
      {
          self::$instance = new Singleton; //on stocke un objet de la classe singleton dans $instance
      }
          return self::$instance;//dans tous les cas je retourne un objet $instance
    }
}
/* $s= new Singleton; 
 Fatal error: Uncaught Error: Call to private Singleton::__construct() from invalid context in C:\xampp\htdocs\POO\04_constantes_static_self\singleton.php:24 Stack trace: #0 {main} thrown in C:\xampp\htdocs\POO\04_constantes_static_self\singleton.php on line 24        J'ai une erreur car le constructeur est en private, je ne peux pas l'appeler a l'exterieur de la class
*/
$objet1= Singleton::getInstance();
var_dump($objet1);
/* le var_dump me retourne :
object(Singleton)#1 (1) { ["numero"]=> int(20) } 
Objet1 est à la reference 1
*/

$objet2= Singleton::getInstance();
echo "<pre>"; var_dump($objet2); echo "</pre>";
/* le retour de mon var_dump est :
object(Singleton)#1 (1) {
    ["numero"]=>
    int(20)
  } 
C'est le meme resultat que pour $objet1, car maintenant $instance n'est plus null, il est le même objet que instance1. Il en sera de meme si je cree d'autres $objet3, $objet4... ils seront tous egaux a $objet1, ils auront tous reference #1. Ce sont tous des duplicatas de l'objet1
*/
echo $objet1->numero .'<br>';
echo $objet2->numero .'<br>';
$objet2->numero=21;
echo $objet1->numero .'<br>';
echo $objet2->numero .'<br>';


?>