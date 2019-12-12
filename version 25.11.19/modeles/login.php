<?PHP
include "../config.php";

if ($_POST['user'] == 'pilote')
{
  header("Location: ../vues/donnees.php");
}

elseif ($_POST['user'] == 'gestionnaire')
{
  header("Location: ../vues/gestionnaire.php");
}

elseif ($_POST['user'] == 'admin')
{
  header("Location: ../vues/admin.php");
}

else
{
  echo 'Erreur';
}
?>
