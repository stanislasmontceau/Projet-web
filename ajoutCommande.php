<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['id_client']) and isset($_POST['id_cmd']) and isset($_POST['date_cmd']) and isset($_POST['prix_cmd'])){
$commande1=new commande($_POST['id_client'],$_POST['id_cmd'],$_POST['date_cmd'],$_POST['prix_cmd']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new CommandeC();
$commande1C->ajouterCommande($commande1);
header('Location: finaliserCommande.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>