<!-- Page pour l'aperçu des articles -->
<!-- Page d'accueil -->

<?php
include('fonctions.php');

$articles = getArticles();
?>


		<!-- Aperçu article -->

		<div class="pt-5 pb-5" class="card">

			<?php foreach($articles as $article): ?>
		  
		    <div style="padding-top: 3rem; padding-bottom: 3rem;">
		
				  <a href="index.php?page=article&id=<?= $article->NumArt ?>" ><?= '<img class="img-fluid" width="100%" src="'.$article->UrlPhotA.'">'; //afficher l'image à la place du lien ?></a>
					  
					  <div class="card-body">

						    <h5 class="card-title"><?= $article->LibTitrA ?></h5>
						    <p class="card-text"><?= $article->LibChapoA ?></p>
						    <a href="index.php?page=article&id=<?= $article->NumArt ?>" class="btn btn-outline-dark">Lire l'article</a>

						<?php endforeach ?>    
					  
					  </div>


			</div>		  

		</div>

	</div>	

	</div> <!-- div qui sert à appliquer le footer hors du container de template.php sur la page d'accueil -->


	<!-- Fin de l'aperçu des articles -->