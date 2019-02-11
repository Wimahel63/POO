<?php   

class A 
{
    public function direBonjour()
    {
        return "Bonjour";
    }
}
 
class B //la class B n'herite pas de la class A
{
    public $mavariable;
    public function __construct()
    {
        $this->mavariable=new A;//je crée un objet A que je place dans la propriété $mavariable de mon objet B
        echo '<pre>'; var_dump($this->mavariable); echo '</pre>';
        /*retour var_dump : object(A)#2 (0) {}     j'ai bien un objet issu de la class A
        */
    }
    public function uneMethode()
    {
        return $this->mavariable->direBonjour();//dans mon objet B, representé par $this, je peux appeler des methodes sur mon objet A.   Habituellement nous mettons juste une -> , mais ici $mavariable contient un objet, une autre -> est donc possible, d'où cette syntaxe $this->mavariable->direBonjour();
    }
}

$b=new B;
echo $b->uneMethode() . '<hr>';
echo $b->mavariable->direBonjour() . '<hr>';
// retour des deux echos : Bonjour . Les deux methodes fonctionnent et renvoient le même message puisqu'ils pointent vers la même propriété
 
?>