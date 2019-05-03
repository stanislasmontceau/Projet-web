<?PHP
include "../core/panierC.php";
$panierC=new PanierC();
if (isset($_POST["id_client"])){
	$panierC->supprimerPanier($_POST["id_client"]);
	header('Location: afficherPanier.php');
}

?>