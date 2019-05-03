<?PHP
include "../entities/panier.php";
include "../core/panierC.php";
$panier=new Panier(75757575,'BEN Ahmed','Salah',50,20);
$panierrC=new PanierC();
$panierrC->afficherPanier($panier);
echo "****************";
echo "<br>";
echo "id_client:".$commande->getid_client();
echo "<br>";
echo "id_pdt:".$commande->getid_pdt();
echo "<br>";
echo "nb_article:".$commande->getnb_article();
echo "<br>";
echo "prix_unit:".$commande->getprix_unit();
?>