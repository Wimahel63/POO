<?php      
//echo '<pre>'; print_r(get_declared_classes()); echo '</pre>';    permet d'observer toutes les classes predefinies existantes en php


//exemple stdClass()
$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');

$objet=(object)$tab;//Cast, transforme le tableau en objet
echo  '<pre>'; var_dump($objet); echo '</pre>';
/*    
object(stdClass)#1 (4) {
  ["0"]=>
  string(5) "Mario"
  ["1"]=>
  string(5) "Yoshi"
  ["2"]=>
  string(4) "Toad"
  ["3"]=>
  string(6) "Bowser"
}
Un objet fait partie de la classe STDCLASS (classe standard de php) lorsque celui-ci est orphelin et n'a pas ete instancié par un 'new'. L'objet n'est issu d'aucune class en particulier
*/
echo $objet->{0};  //permet d'afficher un element de l'objet
// Mario












?>