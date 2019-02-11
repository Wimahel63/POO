<?php 

//avec un iterator,qui est un design pattern, on peut definir une solution pratique à des problemes frequents. Un  pattern propose donc une structure commune pour resoudre les problemes similaires, et ce, même si le contexte diffère selon les cas.
$perso=array("L"=>"Link", "M"=>"Marth", "R"=>"Rondoudou", "S"=>"Samus" );

$it1= new ArrayIterator($perso);
echo '<pre>'; print_r(get_class_methods($it1));echo "</pre>";
echo '<pre>'; var_dump($it1);echo "</pre>";
/*  
Array
(
    [0] => __construct
    [1] => offsetExists
    [2] => offsetGet
    [3] => offsetSet
    [4] => offsetUnset
    [5] => append
    [6] => getArrayCopy
    [7] => count
    [8] => getFlags
    [9] => setFlags
    [10] => asort
    [11] => ksort
    [12] => uasort
    [13] => uksort
    [14] => natsort
    [15] => natcasesort
    [16] => unserialize
    [17] => serialize
    [18] => rewind
    [19] => current
    [20] => key
    [21] => next
    [22] => valid
    [23] => seek
)

object(ArrayIterator)#1 (1) {
  ["storage":"ArrayIterator":private]=>
  array(4) {
    ["L"]=>
    string(4) "Link"
    ["M"]=>
    string(5) "Marth"
    ["R"]=>
    string(9) "Rondoudou"
    ["S"]=>
    string(5) "Samus"
  }
}
*/

$it1->rewind();//rewind() permet d eme placer en haut du fichier
while($it1->valid())
{
    echo $it1->key().'-'.$it1->current()."<br>";
    $it1->next();
/* 
L-Link
M-Marth
R-Rondoudou
S-Samus

- rewind() : permet de se placer au début du fichier, array ou dossier
- valid() : permet  de verifier s'il y a des informations a parcourir
- key() : affiche l'indice, la cle 
- current() : affichage de la valeur
- next() : passe à l'élément suivant. Il correspond un peu à l'incrementation d'une boucle, ce qui permet de ne pas rester tjs au même element.


*/
}










?>