<?PHP
include "../core/newsletterC.php";
$newsletterC=new NewsletterC();
if (isset($_POST["nombre_mails"])){
	$newsletterC->supprimerNewsletter($_POST["nombre_mails"]);
	header('Location: afficherNewsletter.php');
}

?>