<?PHP
include "../core/restaurantC.php";
$restaurantC=new RestaurantC();
if (isset($_POST["cin"])){
	$restaurantC->supprimerRestaurant($_POST["cin"]);
	header('Location: afficherRestaurant.php');
}

?>