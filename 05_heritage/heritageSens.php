<?php   
class A 
{
    public function test1()
    {
      return "test1";
    }
    
}

class B extends A
{
    public function test2()
    {
        return "test2";
    }
}

class C extends B
{
    public function test3()
    {
        return "test3";
    }
    
}


//exercice :creer un objet issu de la class C et afficher les methodes issues de la classe

$c = new C;
echo '<pre>'; var_dump($c); echo '</pre>';
echo '<pre>'; var_dump(get_class_methods($c)); echo '</pre>';
/* retour code :
object(C)#1 (0) {
}
}
puis :
array(3) {
  [0]=>
  string(5) "test3"
  [1]=>
  string(5) "test2"
  [2]=>
  string(5) "test1"
}*/

echo $c->test3(). " " .  $c->test2(). " " . $c->test1(). '<br>' ;
// retour code : test3 test2 test1



/*Si C herite de B, alors C herite de A*/
?>