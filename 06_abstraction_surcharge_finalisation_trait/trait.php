<?php  

/*
Les traits ont été inventés pour repousser les limites de l'héritage. Il est possible pour une classe d'hériter de plusieurs traits en même temps. Un trait est un regroupement de méthodes pouvant être importées dans une classe
*/

trait TPanier
{
    public $nbProduit= 1;
    public function affichageProduit()
    {
        return "Affichage des produits : <br>";
    }
}

trait TMembre
{
    public function affichageMembre()
    {
        return "Affichage des membres : <br>";
    }
}

class Site
{
    use TPanier, TMembre;
}

$site=new Site;
echo "<pre>"; var_dump($site); echo "</pre>";
echo "<pre>"; var_dump(get_class_methods($site)); echo "</pre>";
/*
object(Site)#1 (1) {
  ["nbProduit"]=>
  int(1)
}

array(2) {
  [0]=>
  string(16) "affichageProduit"
  [1]=>
  string(15) "affichageMembre"
}
*/

echo $site->affichageProduit().'<br>';
echo $site->affichageMembre().'<br>';
echo "Nb de produits : ". $site->nbProduit . "<br>";
/*
Affichage des produits :

Affichage des membres :

Nb de produits : 1
*/



















?>