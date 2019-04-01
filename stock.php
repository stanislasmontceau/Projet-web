<?PHP
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['restaurant']) && isset($_GET['stock'])){
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$restaurant=$_GET['restaurant'];
$code=$_GET['stock'];

if (!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['restaurant']) && !empty($_GET['stock'])){
?>

<table border="1">
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Restaurant</th>
<th>Stock</th>
</tr>
<tr>
<td><?PHP echo $nom; ?></td>
<td><?PHP echo $prenom; ?></td>
<td><?PHP echo $restaurant; ?></td>
<td><?PHP echo $stock; ?></td>
</tr>

</table>

<?PHP } 
else{
	echo ("Champs manquants");
}
}
?>
