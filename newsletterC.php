<?PHP
include "../config.php";
class NewsletterC {
function afficherNewsletter ($newsletter){
		echo "Nombre de nombre_mails: ".$newsletter->getNombreMails()."<br>";
		echo "Mail: ".$newsletter->getMail()."<br>";
		echo "Type: ".$newsletter->getType()."<br>";
	}

	function ajouterNewsletter($newsletter){
		$sql="insert into newsletter (nombre_mails,mail,type) values (:nombre_mails, :mail,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nombre_mails=$newsletter->getNombreMails();
        $mail=$newsletter->getMail();
        $type=$newsletter->getType();
		$req->bindValue(':nombre_mails',$nombre_mails);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherNewsletters(){
		//$sql="SElECT * From newsletter e inner join formationphp.newsletter a on e.nombre_mails= a.nombre_mails";
		$sql="SElECT * From newsletter";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerNewsletter($mail){
		$sql="DELETE FROM newsletter where mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierNewsletter($newsletter,$nombre_mails){
		$sql="UPDATE newsletter SET nombre_mails=:nombre_mailsn, mail=:mail,type=:type WHERE nombre_mails=:nombre_mails";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nombre_mailsn=$newsletter->getNombreMails();
        $mail=$newsletter->getMail();
        $type=$newsletter->getType();
		$datas = array(':nombre_mailsn'=>$nombre_mailsn, ':nombre_mails'=>$nombre_mails, ':mail'=>$mail,':type'=>$type);
		$req->bindValue(':nombre_mailsn',$nombre_mailsn);
		$req->bindValue(':nombre_mails',$nombre_mails);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':type',$type);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererNewsletter($nombre_mails){
		$sql="SELECT * from newsletter where nombre_mails=$nombre_mails";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeNewsletters($nombre_mails){
		$sql="SELECT * from newsletter where nombre_mails=$nombre_mails";
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