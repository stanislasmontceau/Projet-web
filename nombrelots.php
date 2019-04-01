lotsC.php
P
Type
PHP
Taille
3 Ko (3 531 octets)
Espace utilisé
0 octetÉléments appartenant à esprit.tn
Emplacement
core
Propriétaire
Projet Web
Modifié
le 13 mars 2019 par Projet Web
Ouvert
le 15:46 par moi
Créé le
13 mars 2019
Pas de description
Les lecteurs peuvent télécharger
<?PHP
include "../config.php";
class lotsC {
function afficherLots ($lots){
		echo "Cin: ".$lots->getCin()."<br>";
		echo "Nom: ".$lots->getNom()."<br>";
		echo "Prénom: ".$lots->getPrenom()."<br>";
		echo "Restauarant: ".$lots->getrestaurants()."<br>";
		echo "Stock: ".$lots->getStock()."<br>";
	}
	function calculerRevenu($lots){
		echo $lots->getStock() * $lots->getPrix();
	}
	function ajouterlots($lotslots){
		$sql="insert into lots (cin,nom,prenom,restaurants,stock) values (:cin, :nom,:prenom,:restaurants,:stock)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$lots->getCin();
        $nom=$lots->getNom();
        $prenom=$lots->getPrenom();
        $nb=$lots->getStock();
        $tarif=$lots->getrestaurants();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':restaurants',$restaurants);
		$req->bindValue(':stock',$stock);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlots(){
		//$sql="SElECT * From lots e inner join formationphp.lots a on e.cin= a.cin";
		$sql="SElECT * From lots";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlots($cin){
		$sql="DELETE FROM lots where cin= :cin";
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
	function modifierlots($lots,$cin){
		$sql="UPDATE lots SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,restaurants=:tarifH WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$lots->getCin();
        $nom=$lots->getNom();
        $prenom=$lots->getPrenom();
        $nb=$lots->getStocks();
        $tarif=$lots->getrestaurants();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':restaurants'=>$restaurants,':stock'=>$stock);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':restaurants',$restaurants);
		$req->bindValue(':tarif',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlots($cin){
		$sql="SELECT * from lots where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelots($tarif){
		$sql="SELECT * from lots where restaurants=$tarif";
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
