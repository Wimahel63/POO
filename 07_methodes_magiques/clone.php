<?php    

class Ecole
{
    public $nom="WF3";
    public $cp=78;
    public function __clone()
    {
        $this->cp=92;
    }
}

$ecole1 = new Ecole;
echo "<pre>"; var_dump($ecole1); echo "</pre>";
/* 
object(Ecole)#1 (2) {
  ["nom"]=>
  string(3) "WF3"
  ["cp"]=>
  int(78)
}
*/
$ecole1->cp=75;
echo "<pre>"; var_dump($ecole1); echo "</pre>";
/*
object(Ecole)#1 (2) {
  ["nom"]=>
  string(3) "WF3"
  ["cp"]=>
  int(75)
}   */

$ecole2=new Ecole;
echo "<pre>"; var_dump($ecole2); echo "</pre>";
/* 
object(Ecole)#2 (2) {
  ["nom"]=>
  string(3) "WF3"
  ["cp"]=>
  int(78)
}   */

$ecole3=$ecole1;
echo "<pre>"; var_dump($ecole3); echo "</pre>";
/*
object(Ecole)#1 (2) {
  ["nom"]=>
  string(3) "WF3"
  ["cp"]=>
  int(75)
}
Il s'agit bien du même objet, comme en atteste l'#1
.Lorsque je modifie $ecole1 cela prend aussi effet sur $ecole3, puisqu'il s'agit du même objet.  $ecole1 et $ecole3 pointent vers le même objet #1
*/

$ecole3->cp=91;
echo "ecole1 > " .$ecole1->cp .'<br>';
echo "ecole3 > " .$ecole3->cp .'<br>';
/*    
ecole1 > 91
ecole3 > 91
*/

$ecole4= clone $ecole2;
echo "<pre>"; var_dump($ecole4); echo "</pre>";
/*   
object(Ecole)#3 (2) {
  ["nom"]=>
  string(3) "WF3"
  ["cp"]=>
  int(92)
}
Ici clone cree un objet et recupere les infos de $ecole2 et le code  public function __clone()
    {
        $this->cp=92;
    }
s'execute. On change donc de valeur pour $cp en prenant celui de la méthode magique __clone(). A ce moment-là la méthode magique s'éxecute     
*/
















?>