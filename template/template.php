<!doctype html>

<!-- page template contenant le header et le footer, ainsi que la mise en page qui ne change pas quel que soit le contenu du site internet -->

<html lang="fr">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Rétrobordeaux</title>
	
	<!--Bootstrap links -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!--Bootstrap links -->

</head>

<body>

	<header>
		
		<!-- LOGO -->
		<a href="index.php"><img class='mx-auto d-block'src="img/logo.png" href="#" alt="Logo Rétrobordeaux" height="25%" width="25%"></a>

		<!-- Navbar 1 : début -->
  
		<div class="container">

			<div id="textes_onglets" class="row justify-content-center">

				<div class="center-block" style="float:none;">
					<a class="navbar-item" href="index.php?page=contact">
						<img src="img/onglets_contact.svg" width="80%" height="80%" alt="Contact">
					</a>	
				</div>

				<div class="center-block" style="float:none;">
					<a class="navbar-item" href="index.php">
						<img src="img/onglets_accueil.svg" width="80%" height="80%" alt="Accueil">
					</a>	
				</div>

				<div class="center-block" style="float:none;">
					<a class="navbar-item" href="index.php?page=about">
						<img src="img/onglets_about.svg" width="80%" height="80%" alt="A propos">
					</a>						
				</div>

			</div>

			<div id="barres_onglets" class="row justify-content-center">

				<div class="center-block" style="float:none;">
					<img src="img/onglets_barre_contact.svg" width="60%" height="60%" alt="barre contact">
				</div>

				<div class="center-block" style="float:none;">
					<img src="img/onglets_barre_accueil.svg" width="60%" height="60%" alt="barre accueil">
				</div>

				<div class="center-block" style="float:none;">
					<img src="img/onglets_barre_about.svg" width="60%" height="60%" alt="barre à propos">
				</div>

			</div>

		<!-- Navbar 1 : fin -->

		<!------------------------------------>

		<!-- Navbar 2 : connexion et formulaires -->

		<div style="padding-top: 2rem;">

			<ul class="nav justify-content-end">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Connexion/Déconnexion</a>
			  </li>
			  <li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ajouter...</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item" href="index.php?page=article-form">Ajouter un article</a>
					<a class="dropdown-item" href="index.php?page=langue">Ajouter une langue</a>
					<a class="dropdown-item" href="index.php?page=motcle">Ajouter un mot clé</a>
					<a class="dropdown-item" href="index.php?page=thematique">Ajouter une thématique</a>
			    </div>
			  </li>
			</ul>

		</div>	

		<!-- Navbar 2 : fin -->

	</header>

		<div class='container col-6'> <!-- Marges de la page -->

	<!-- Affiche le contenu d'une page, la variable est définie dans index.php. -->
	<?php echo $contenu; ?>
	
		</div>


	<footer>
		
		

		<nav class="nav navbar-light justify-content-between">
			
			<!-- Lien Retour à l'accueil -->
			
			<li class="nav-item">
		    	<a class="nav-item nav-link active" href="index.php?page=accueil">Retour à l'accueil</a>
		    </li>
		   
		    <!-- Lien CGU -->
			
			<li class="nav-item ">
				<a class="nav-item nav-link active" href="other/CGU.pdf" target="_blank">Conditions générales d'utilisation</a>
		    </li>	

		</nav>

	</footer>	

</body>

</html>