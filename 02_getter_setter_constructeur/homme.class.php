<?php      

class Homme{
    private $error;
    private $prenom;
    private $nom;   
                    //la valeur de la variable se stocke ici, dans setPrenom($prenom)
    public function setPrenom($prenom){
        if(is_string($prenom)){//si le prenom est un string, renvoie -le
            $this->prenom = $prenom;
        }
        else {
            $this->error= trigger_error("ce n'est pas un string" , E_USER_WARNING);
            return $this->error;//si le prenom n'est pas un string, indique une erreur
        }
    }
    public function getPrenom(){//jamais d'argument dans le getter
        return $this->prenom;
    }
    public function setNom($nom){
        if(is_string($nom))//si je n'ai qu'une seule instruction dans mon if, je n'ai pas besoin des {}, d'où leur absence ici
        $this->nom = $nom;
    }
    public function getNom(){//rappel : jamais d'argument dans le getter
        return $this->nom;
    }
}

//-------------------------------
$homme = new Homme;//pas d'arg, pas de constructeur, donc () inutiles
$homme->setPrenom("William");
echo $homme->getPrenom() . '<hr>';

/* $homme->setPrenom(25);
echo $homme->getPrenom() . '<hr>';
ici mon code me retourne :
Warning: ce n'est pas un string in C:\xampp\htdocs\POO\02_getter_setter_constructeur\homme.class.php on line 12
William
 car il ne s'agit pas d'un sstring mais un int*/


$homme->setNom("Piszczyglowa");//je pointe mon objet Homme, je sette le nom
echo $homme->getNom() . '<hr>';//je recupere la donnee pour l'afficher avec getNom();


$homme2= new Homme;
$homme2->getPrenom();
echo $homme2->getPrenom() . '<hr>';
//mon retour est vide car ces proprietes appartiennent a l'objet et pas a la classe.Ici j'ai rinstancié l'objet dans la variable $homme2 . Preuve qu'au dessus on modifie bien l'objet et non la classe

$homme2->setNom("Myrddin");//ici j'ai bien un retour car j'ai sette, j'ai donc un retour
echo $homme2->getNom() . '<hr>';
// retour du echo : Myrddin

//$this represente l'objet a l'interieur de la classe





?>