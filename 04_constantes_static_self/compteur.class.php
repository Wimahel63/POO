<?php 

class Compteur
{
    public static $nbInstanceClass=0;//appartient à la class
    public $nbInstanceObjet=0;//appartient a l'objet
    public function __construct()
    {
        ++self::$nbInstanceClass;//self::$nbInstanceClass + 1
        ++$this->nbInstanceObjet;//$this->nbInstanceObjet + 1
    }
}

/* on observe que la variable $nbInstanceClass a la valeur de 5, elle appartient donc à la classe
on observe que la variable $nbInstanceObjet a la valeur de 1, elle appartient donc à l'objet*/



$c1 = new Compteur;
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;


echo "Nombre de fois où la class a été instanciée : " .Compteur::$nbInstanceClass . '<hr>';
// retour code : Nombre de fois où la class a été instanciée : 5

echo "Nombre de fois où l'objet a ete instancié : " .$c5->nbInstanceObjet . '<hr>';
// retour code : Nombre de fois où l'objet a ete instancié : 1
















?>