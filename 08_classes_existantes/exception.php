<?php      
function recherche($tab, $elem)
{
    if(!is_array($tab))
    {
        throw new Exception('Vous devez envoyer un array');//throw permet de nous envoyer dans le bloc catch et d'arreter l'execution du code
    }
    if(sizeof($tab) <= 0)
    {
        throw new Exception('Vous devez envoyer un array avec du contenu');
    }
    $position = array_search($elem, $tab);
    return $position;
}


$test=array();
$liste=array('Mario', 'Luigi','Bowser','Yoshi');

try//bloc d'essai : on va essayer d'effectuer les instructions suivantes dans le try
{
   echo "Le personnage choisi se trouve à l'indice : <strong>" . recherche($liste, 'Mario') . "</strong><br>";
   /*Le personnage choisi se trouve à l'indice : 0 */
   echo "Le personnage choisi se trouve à l'indice : <strong>" . recherche($liste, 'Bowser') . "</strong><br>";
   /*Le personnage choisi se trouve à l'indice : 2 */
   echo "Le personnage choisi se trouve à l'indice : <strong>" . recherche($test, 'Bowser') . "</strong><br>";/*cet exemple me renvoie direct dans le catch car il comporte une erreur : $test n'est pas definie, le tableau est vide */
   echo "hello";//ne renvoie rien car il y a une erreur: s'il y a une erreur, le script est bloqué et rien ne sera lu apres l'erreur. Il n'y a pas de raison de continuer les traitements si l'un d'entre eux dysfonctionne, car les prochains traitements ne peuvent être dépendants de celui qui a dysfonctionné.
}
catch(Exception $e)//bloc de capture : on va attraper les exceptions "Exception" s'il y en a qui sont levées, decelees. $e represente l'exception car en mettant throw je n'ai pas pu mettre le nom de la variable puisque l'execution est stoppée pour arriver jusqu'ici. Try et catch fonctionnent ensemble. Il est possible de mettre plusieurs blocs try / catch à la suite
{
  echo '<pre>'; print_r($e); echo '</pre>';
  /* Exception Object
(
    [message:protected] => Vous devez envoyer un array avec du contenu
    [string:Exception:private] => 
    [code:protected] => 0
    [file:protected] => C:\xampp\htdocs\POO\08_classes_existantes\exception.php
    [line:protected] => 10
    [trace:Exception:private] => Array
        (
            [0] => Array
                (
                    [file] => C:\xampp\htdocs\POO\08_classes_existantes\exception.php
                    [line] => 26
                    [function] => recherche
                    [args] => Array
                        (
                            [0] => Array
                                (
                                )

                            [1] => Bowser
                        )

                )

        )

    [previous:Exception:private] => 
)*/
  echo "Message d'erreur : " .$e->getMessage(). " à la ligne "
. $e ->getLine() . " dans le fichier " . $e->getFile()."<hr>";
/* 
Message d'erreur : Vous devez envoyer un array avec du contenu à la ligne 10dans le fichier C:\xampp\htdocs\POO\08_classes_existantes\exception.php
*/
}


//------------------

echo "<hr><hr>";

try{
    $bdd = new PDO ('mysql:host=localhost;dbname=grrb','root','');
    echo "connexion reussie";
    /* lorsque j'ai une bdd qui existe, j'entre dans cette condition, et j'obtiens le message suivant : connexion reussie*/
}
catch(PDOException $e)// PDOException est une class predefinie en PHP permettant d'attraper les exceptions, en cas d'erreur dans le bloc try on tombe directement dans le bloc catch
{
    echo "<pre>"; print_r($e);  echo "</pre>";
    /* lorsque je n'arrive pas à me connecter ou que ma base n'existe pas, j'obtiens :
    PDOException Object
(
    [message:protected] => SQLSTATE[HY000] [1049] Unknown database 'grrb'
    [string:Exception:private] => 
    [code:protected] => 1049
    [file:protected] => C:\xampp\htdocs\POO\08_classes_existantes\exception.php
    [line:protected] => 74
    [trace:Exception:private] => Array
        (
            [0] => Array
                (
                    [file] => C:\xampp\htdocs\POO\08_classes_existantes\exception.php
                    [line] => 74
                    [function] => __construct
                    [class] => PDO
                    [type] => ->
                    [args] => Array
                        (
                            [0] => mysql:host=localhost;dbname=encore
                            [1] => root
                            [2] => 
                        )

                )

        )

    [previous:Exception:private] => 
    [errorInfo] => 
)
    */
    echo "<pre>"; print_r(get_class_methods($e)); echo "</pre>";
    echo "Message d'erreur : " .$e->getMessage(). " à la ligne "
    . $e ->getLine() . " dans le fichier " . $e->getFile()."<hr>";
    /*  
    Array
(
    [0] => __construct
    [1] => __wakeup
    [2] => getMessage
    [3] => getCode
    [4] => getFile
    [5] => getLine
    [6] => getTrace
    [7] => getPrevious
    [8] => getTraceAsString
    [9] => __toString
)

Message d'erreur : SQLSTATE[HY000] [1049] Unknown database 'grrb' à la ligne 74 dans le fichier C:\xampp\htdocs\POO\08_classes_existantes\exception.php*/
}


?>