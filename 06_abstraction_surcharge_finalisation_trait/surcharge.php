<?php      

class A 
{
    public function calcul()
    {
        return 10;
    }

}
 
class B extends A 
{
    public function calcul()//redefinition
    {
        $nb = parent::calcul();//parent fonctionne pour appeler une methode d'une classe parente lors d'une SURCHARGE (afin d'eviter qu'elle ne s'appelle elle-même  $this->calcul() car elle est redefinie)

        if($nb <= 100) return "$nb est inferieur ou egal a 100";
        else           return "$nb est superieur a 100";
    }
    public function autreCalcul()
    {
        $nb=parent::calcul();//il est possible d'atteindre une methode de mon parent meme s'il n'y a pas de redefinition
        return $nb;
    }
}

//surcharge, ou override = une redefinition + surcharge permet de prendre en compte le comportement de ma fonction d'origine et d'y ajouter un traitement complémentaire
//contexte => pour la surcharge, si on ne faisait pas ça dans wordpress, par ex,  on ne pourrait pas mettre à jour le CMS, on modifierait directement les fonctions du coeur!

$b=new B;
echo $b->calcul() . "<br>";
//retour echo : 10 est inferieur ou egal a 100
echo $b->autreCalcul().'<br>';
// retour echo : 10



?>