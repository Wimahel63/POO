<?php 
/* au vue de cette classe, renseigner les propriétés : pseudo et mdp (getter et setter)
et faire les affichages nécessaires*/

class Membre
{
   private $pseudo;
   private $mdp;

   public function setPseudo($pseudo)
   {
    $this->pseudo=$pseudo;
   }
   public function getPseudo()
   {
    return $this->pseudo;
   }

   public function setMdp($mdp)
   {
    $this->mdp=$mdp;
   }
   public function getMdp()
   {
   return $this->mdp;
   }
}



$membre= new Membre;
$membre->setPseudo("Whitebat");
echo "Votre pseudo est : " .$membre->getPseudo(). '<br>';


$membre->setMdp("motdepasse");
echo "Votre mdp est : " .$membre->getMdp();

/*ces lignes de code ont pour resultat sur ma page: 
Votre pseudo est : Whitebat
Votre mdp est : motdepasse*/
?>