<?php 
require('connexionex.php');

if (isset($_GET['id']) AND !empty($_GET['id'])) {
  $suppr_id = ($_GET['id']);

  $suppr = $bdd->prepare('DELETE FROM article WHERE NumArt = ?');
  $suppr->execute(array($suppr_id));

  header('Location: Affichage_accueil.php');
}
?>