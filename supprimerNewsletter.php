<?PHP
include "../core/newsletterC.php";
$newsletterC=new NewsletterC();
if (isset($_POST["mail"])){
	$newsletterC->supprimerNewsletter($_POST["mail"]);
	header('Location: afficherNewsletter.php');
}

?>