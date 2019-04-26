<?PHP
include "../config.php";
class RestaurantC {
function afficherRestaurant ($restaurant){
		echo "Cin: ".$restaurant->getCin()."<br>";
		echo "Nom: ".$restaurant->getNom()."<br>";
		echo "Nom du restaurant: ".$restaurant->getNomRestaurant()."<br>";
		echo "Type: ".$restaurant->getType()."<br>";
		echo "Description: ".$restaurant->getDescription()."<br>";
	}

	function ajouterRestaurant($restaurant){
		$sql="insert into restaurant (cin,nom,nom_restaurant,type,description) values (:cin, :nom,:nom_restaurant,:type,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$restaurant->getCin();
        $nom=$restaurant->getNom();
        $nom_restaurant=$restaurant->getNomRestaurant();
        $type=$restaurant->getType();
        $description=$restaurant->getDescription();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_restaurant',$nom_restaurant);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRestaurants(){
		//$sql="SElECT * From restaurant e inner join formationphp.restaurant a on e.cin= a.cin";
		$sql="SElECT * From restaurant";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRestaurant($cin){
		$sql="DELETE FROM restaurant where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierRestaurant($restaurant,$cin){
		$sql="UPDATE restaurant SET cin=:cinn, nom=:nom,nom_restaurant=:nom_restaurant,type=:type,description=:description WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$restaurant->getCin();
        $nom=$restaurant->getNom();
        $nom_restaurant=$restaurant->getNomRestaurant();
        $type=$restaurant->getType();
        $description=$restaurant->getDescription();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':nom_restaurant'=>$nom_restaurant,':type'=>$type,':description'=>$description);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':nom_restaurant',$nom_restaurant);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererRestaurant($cin){
		$sql="SELECT * from restaurant where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeRestaurants($description){
		$sql="SELECT * from restaurant where description=$description";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>