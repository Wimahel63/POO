<?php      
class Electricien
{
    public function getSpecialiste()
    {
        return "pose de câbles, disjoncteurs, tableaux ou armoires électriques...<br>";
    }
    public function getHoraires()
    {
        return "10h/18h";
    }
}

class Plombier
{
    public function getSpecialiste()
    {
        return " tuyaux, robinets, chauffe-eau, compteurs...";
    }
    public function getHoraires()
    {
        return "8h/19h";
    }
}

class Entreprise
{
    public $numero = 0;
    public function appelUnEmploye($employe)
    {
        $this->numero++;
        //$this->monEmploye2=new Electricien;
        //$entereprise->monEmploye2=new Electricien;
        $this->{"monEmploye".$this->numero}=new $employe;//creation de variable dynamique 
        return $this->{"monEmploye".$this->numero};
    }
}

$entreprise= new Entreprise;
$entreprise->appelUnEmploye('Plombier');//Ce code cree une propriete qui est stockee automatiquement dans ma class 'Plombier'. 'Plombier' est envoyé dans $employe, du coup $numero qui est incrementé, passe a 1
echo '<pre>'; var_dump($entreprise); echo '</pre>';
/*retour var_dump :object(Entreprise)#1 (2) {
    ["numero"]=>
    int(1)
    ["monEmploye1"]=>
    object(Plombier)#2 (0) {
    }
  }
  */
echo $entreprise->monEmploye1->getSpecialiste(). '<br>';
//retour echo : tuyaux, robinets, chauffe-eau, compteurs...
echo $entreprise->monEmploye1->getHoraires(). '<br>';
// retour echo : 8h/19h
$entreprise->appelUnEmploye('Electricien');//j'appelle entreprise, je pointe vers ma methode appelUnEmploye() et je lui passe la valeur 'Electricien'.
echo $entreprise->monEmploye2->getSpecialiste() .$entreprise->monEmploye2->getHoraires() ; //l'incrementation creee par le code me cree un nouvel objet :monEmploye2 qui est ici 'Electricien'
//
/*retour echo : pose de câbles, disjoncteurs, tableaux ou armoires électriques...
10h/18h      J'ai bien un deuxieme specialiste qui a ete cree automatiquement et qui s'est stocké dans public function appelUnEmploye($employe), et qui a ete incrementé automatiquement grâce  à:  $this->numero++;
        $this->{"monEmploye".$this->numero}=new $employe;
        return $this->{"monEmploye".$this->numero};
cette incrementation s'ajoute a chaque fois dans ma variable public $numero = 0; ce qui permet au code d'incrementer automatiquement*/




?>