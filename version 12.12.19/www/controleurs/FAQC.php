<?PHP
include "../config.php";
class FAQC {
function afficherFAQ ($faq){
		echo "Id question: ".$faq->getIdQuestion()."<br>";
		echo "Réponse ".$faq->getRéponse()."<br>";
		echo "Question ".$faq->getQuestion()."<br>";
		
	}

	function ajouterQuestion($faq){
		$sql="insert into faq (
		idQuestion, reponse, question) values (:idQuestion, :reponse, :question)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idQuestion=$faq->getIdQuestion();
        $réponse=$utilisateur->getReponse();
        $question=$utilisateur->getQuestion();
		$req->bindValue(':idQuestion',$idQuestion);
		$req->bindValue(':reponse',$réponse);
		$req->bindValue(':question',$question);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherQuestions(){
		//$sql="SElECT * From utilisateur e inner join formationphp.utilisateur a on e.idUtilisateur= a.idUtilisateur";
		$sql="SELECT * From faq";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerQuestion($idQuestion){
		$sql="DELETE FROM faq where idQuestion= :idQuestion";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idQuestion',$idQuestion);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	public function  getFAQ()
	{
		try{
			$c = new config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM faq ');
			$stmt->execute();
			//$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $stmt;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
}

?>