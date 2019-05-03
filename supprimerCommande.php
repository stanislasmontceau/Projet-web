<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["id_client"])){
	$commandeC->supprimerCommande($_POST["id_client"]);
	header('Location: afficherCommande.php');
}

?>