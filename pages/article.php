<!-- page d'affichage d'un article à partir de la base de données -->

<?php

	extract($_GET);
	$id = strip_tags($id);
	
	require('fonctions.php');
	
	$article = getArticle($id);
	$motcle = getMotCle($id);

?>

			<br><h1><?= $article->LibTitrA ?></h1><br>
			<p>Publié le : <?= $article->DtCreA ?></p><br>

			
			<h5><?= $article->LibChapoA ?></h5><br>
			
			<?= '<img class="img-fluid" width="100%" src="'.$article->UrlPhotA.'">'; //afficher l'image à la place du lien ?>
			
			<br><br><p><?= $article->Parag1A ?>
			</p>
			
			<br><h4><?= $article->LibSsTitr1 ?></h4><br>
			
			<p><?= $article->Parag2A ?></p>
			
			<br><h4><?= $article->LibSsTitr2 ?></h4><br>
			
			<p><?= $article->Parag3A ?></p>
			
			<h6><?= $article->LibConclA ?></h6>

			<p><?= $article->LiensExternes ?></p>

			<p>Elise DUGUE, Julie HELDERLE, Coralie LEFEVRE, Tracy NG SING KWONG.</p>
			
				<!--Supprimer et Modifier l'article-->
			<button type="button" class="btn btn-outline-secondary" href="supprarticle.php?id=<?= $article->NumArt ?>">Supprimer</button>
			<button type="button" class="btn btn-outline-secondary" href="Form_Article.php?edit=<?= $article->NumArt ?>">Modifier</button>
		

