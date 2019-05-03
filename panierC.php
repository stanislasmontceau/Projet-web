<?PHP
include "../config.php";
class PanierC {
function afficherPanier ($panier){
		echo "Id_client: ".$panier->getId_client()."<br>";
		echo "Id_pdt: ".$panier->getId_pdt()."<br>";
		echo "Nb_article: ".$panier->getNb_article()."<br>";
		echo "Prix_unit: ".$panier->getMPrix_unit()."<br>";
	
	}
	
	function ajouterPanier($panier){
		$sql="insert into panier (id_client,id_pdt, nb_article,prix_unit) values (:id_client,:id_pdt,:nb_article,:prix_unit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$panier->getId_client();
        $id_pdt=$panier->getId_pdt();
        $nb_article=$panier->getNb_article();
        $prix_unit=$panier->getPrix_unit();
        
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_pdt',$id_pdt);
		$req->bindValue(':nb_article',$nb_article);
		$req->bindValue(':prix_unit',$prix_unit);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPaniers(){
		//$sql="SElECT * From panier e inner join formationphp.panier a on e.id_client= a.id_client";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPanier($id_client){
		$sql="DELETE FROM panier where id_client= :id_client";
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
	function modifierPanier($panier,$id_client){
		$sql="UPDATE panier SET id_client=:id_clientn,id_pdt=:id_pdt, nb_article=:nb_article,prix_unit=:prix_unit WHERE id_client=:id_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_clientn=$panier->getId_client();
		$id_pdt=$panier->getId_pdt();
        $nb_article=$panier->getNb_article();
        $prix_unit=$panier->getPrix_unit();
       
		$datas = array(':id_clientn'=>$id_clientn, ':id_client'=>$id_client, ':id_pdt'=>$id_pdt, ':nb_article'=>$nb_article,':prix_unit'=>$prix_unit);
		$req->bindValue(':id_clientn',$id_clientn);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_pdt',$id_pdt);
		$req->bindValue(':nb_article',$nb_article);
		$req->bindValue(':prix_unit',$prix_unit);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPanier($id_client){
		$sql="SELECT * from panier where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePaniers($prix_unit){
		$sql="SELECT * from panier where prix_unit=$prix_unit";
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