<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['id_client']) and isset($_POST['id_pdt']) and isset($_POST['nb_article']) and isset($_POST['prix_unit'])){
$panier1=new panier($_POST['id_client'], $_POST['id_pdt'],$_POST['nb_article'],$_POST['prix_unit']);
//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$panier1C=new PanierC();
$panier1C->ajouterPanier($panier1);
header('Location: ajouterCommande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>