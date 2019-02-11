<?php      

final class Application
{
   public function lancementApplication()
   {
       return "L'appli se lance comme cela!";
   }
}

class Test extends Application
{

}


class Application2
{
    final public function lancementApplication()
    {
        return "L'appli se lance ainsi";
    }
}

class Extension extends Application2
{
    //public function lancementApplication(){}
}

$app = new Application;
echo "<pre>"; var_dump($app); echo "</pre>";
/*retour var_dump: 
object(Application)#1 (0) {
}
*/

echo $app->lancementApplication();
// retour echo : L'appli se lance comme cela!


/*$test=new Test;
echo $test->lancementApplication();
retour echo:
 Fatal error: Class Test may not inherit from final class (Application) in C:\xampp\htdocs\POO\06_abstraction_surcharge_finalisation_trait\finalisation.php on line 14
En effet, une class ne peut pas heriter d'une final class
 */

/*$ext= new Extension ;
echo $ext->lancementApplication();
Fatal error: Class Test may not inherit from final class (Application) in C:\xampp\htdocs\POO\06_abstraction_surcharge_finalisation_trait\finalisation.php on line 14
Je ne peux pas surcharger ou redefinir une methode final*/

/*RESUME : 
-une classe finale ne peut pas etre heritee
-une class finale reste instanciable
-une methode finale peut etre presente dans une classe normale
-une methode finale permet d'eviter qu'elle soit redefinie ou surchargée 
-l'interet de mettre le mot-cle  'final' sur une methode est de verouiller afin d'empecher toute sous-classe de la redefinir (quand nous voulons que le comportement d'une methode soit preserve durant l'heritage)
*/


?>