<?php    
                   //$liste,  'Mario'
function recherche($tab, $elem)
{
    if(!is_array($tab))
     die('vous devez envoyer un ARRAY');//si die s'execute,  tous les traitements suivants ne sortent pas

    $position = array_search($elem, $tab);//array_search : fonction predefinie qui permet de trouver la position d'un element dans un tableau array
    return $position;
}

$liste=array('Mario', 'Yoshi', 'Toad', 'Bowser');
echo "position de l'element dans le tableau :" .recherche($liste, 'Mario'). '<br>';
/*retour :  position de l'element dans le tableau :0  */

echo "position de l'element dans le tableau :" .recherche($liste, 'Bowser'). '<br>';
/* position de l'element dans le tableau :3     */

echo "position de l'element dans le tableau :" .recherche('bhjfb', 'Bowser'). '<br>';
/*   retour : 
vous devez envoyer un ARRAY
Dans ce cas, il ne s'agit pas d'un element de l'array, c'est donc le die qui s'execute. Comme il s'execute, tous les codes qui suivront ne seront donc pas executés
*/
echo "hello"; // rien ne sera renvoyé apres le die s'il y a une erreur detectée, comme dans le cas precedent par ex. Le die stoppe tout
?>