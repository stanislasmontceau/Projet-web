<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
$commande=new Commande(75757575,'BEN Ahmed','Salah',50,20);
$commanderC=new CommandeC();
$commanderC->afficherCommande($commande);
echo "****************";
echo "<br>";
echo "id_client:".$commande->getid_client();
echo "<br>";
echo "id_cmd:".$commande->getid_cmd();
echo "<br>";
echo "date_cmd:".$commande->getdate_cmd();
echo "<br>";
echo "prix_cmd:".$commande->getprix_cmd();
?>