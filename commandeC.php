<?PHP
include "../config.php";
class CommandeC {
function afficherCommande ($commande){
		echo "Id_client: ".$commande->getId_client()."<br>";
		echo "Id_cmd: ".$commande->getId_cmd()."<br>";
		echo "Date_cmd: ".$commande->getDate_cmd()."<br>";
		echo "Prix_cmd: ".$commande->getPrix_cmd()."<br>";

	}
	
	function ajouterCommande($commande){
		$sql="insert into commande (id_client,id_cmd,date_cmd,prix_cmd) values (:id_client,:id_cmd,:date_cmd,:prix_cmd)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$commande->getId_client();
        $id_cmd=$commande->getId_cmd();
        $date_cmd=$commande->getDate_cmd();
        $prix_cmd=$commande->getPrix_cmd();
       
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_cmd',$id_cmd);
		$req->bindValue(':date_cmd',$date_cmd);
		$req->bindValue(':prix_cmd',$prix_cmd);
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.id_client= a.id_client";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($id_client){
		$sql="DELETE FROM commande where id_client= :id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$id_client){
		$sql="UPDATE commande SET id_client=:id_clientn, id_cmd=:id_cmd, date_cmd=:date_cmd,prix_cmd=:prix_cmd WHERE id_client=:id_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_clientn=$commande->getId_client();
		$id_cmd=$commande->getId_cmd();
        $date_cmd=$commande->getDate_cmd();
        $prix_cmd=$commande->getPrix_cmd();
       
		$datas = array(':id_clientn'=>$id_clientn, ':id_client'=>$id_client,':id_cmd'=>$id_cmd, ':date_cmd'=>$date_cmd,':prix_cmd'=>$prix_cmd);
		$req->bindValue(':id_clientn',$id_clientn);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_cmd',$id_cmd);
		$req->bindValue(':date_cmd',$date_cmd);
		$req->bindValue(':prix_cmd',$prix_cmd);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCommande($id_client){
		$sql="SELECT * from commande where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCommandes($prix_cmd){
		$sql="SELECT * from commande where prix_cmd=$prix_cmd";
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