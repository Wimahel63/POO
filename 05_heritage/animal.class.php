<?php
class Animal
{
    protected function deplacement()
    {
        return "je me deplace";
    }
    public function manger()
    {
        return "je mange chaque jour";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return 'Je suis un éléphant, ' . $this->deplacement();//j'utilise la methode deplacement() qui est protected dans la methode quiSuisJe() qui est public. J'y aurai donc accès a l'exterieur si j'instancie la methode quiSuisJe()
    }
   
}
//avec extends je peux avoir accès dans ma class elephant aux methodes definies dans la class animal. Il n'est pas possible d'heriter de plusieurs classes en même temps
 
$elephant= new Elephant;
echo '<pre>'; var_dump(get_class_methods($elephant)); echo '</pre>';
/*retour code : 
array(1) {
    [0]=>
    string(6) "manger"
  }
  je retrouve bien la methode manger car elle est public. L'autre methode est bien là aussi, mais etant prtotected on ne la voit pas en retour
  
 apres avoir ecrit la methode quisuisje() dans ma class elephant, j'obtiens :
array(2) {
  [0]=>
  string(9) "quiSuisJe"
  [1]=>
  string(6) "manger"
}
en effte, si ma function deplacement est en protected, je ne peux pas l'utiliser, mais comme je la redefinis dans ma function quisuisje() qui est, elle, en public , alors je peux l'utiliser en instanciant quisuisje()*/

echo    $elephant->quiSuisJe() ." et ". $elephant-> manger()  .'<br>'; 
//retour code : Je suis un éléphant, je me deplace et je mange chaque jour


class Chat extends Animal
{
   public function quiSuisJe()
   {
       return "je suis un chat";
   }
   public function manger()
   {
       return "je me goinfre comme Garfield";
   }
}

$chat= new Chat;
echo '<pre>'; var_dump(get_class_methods($chat)); echo '</pre>';
/*array(2) {
  [0]=>
  string(9) "quiSuisJe"
  [1]=>
  string(6) "manger"
} */

echo $chat->quiSuisJe(). " ". $chat->manger();
/*retour code : je suis un chat je me goinfre comme Garfield
Ici j'ai bien affiché "je me goinfre comme Garfield " et non "je mange chaque jour" car la methode a été redéfinie dans la classe Chat. L'interpreteur cherche d'abord dans la class Chat, et seulement si la methode n'avait pas été trouvée, il aurait cherché dans la classe dont j'herite
*/
?>