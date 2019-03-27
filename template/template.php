<!doctype html>

<!-- page template contenant le header et le footer, ainsi que la mise en page qui ne change pas quel que soit le contenu du site internet -->

<html lang="fr">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rétrobordeaux</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>

	<header>
		
		<!-- LOGO -->
		<a href="index.php"><img class='mx-auto d-block'src="img/logo.png" href="#" alt="Logo Rétrobordeaux" height="25%" width="25%"></a>

		<!-- Navbar : début -->
  
		<nav class="navbar navbar-expand-lg justify-content-center">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="navbar-brand" href="#">
					<img src="img/onglets_contact.svg" width="60%" height="60%" alt="Contact">
				</a>
		      </li>
		      <li class="nav-item">
		        <a class="navbar-brand" href="index.php">
					<img src="img/onglets_accueil.svg" width="60%" height="60%" alt="Accueil">
				</a>
		      </li>
		      <li class="nav-item">
		        <a class="navbar-brand" href="index.php?page=about">
					<img src="img/onglets_about.svg" width="60%" height="60%" alt="A propos">
				</a>
		      </li>
		    </ul>
		</nav>

		<!-- Navbar : fin -->

	</header>

		<div class='container col-6'> <!-- Marges de la page -->

	<!-- Affiche le contenu d'une page, la variable est définie dans index.php. -->
	<?php echo $contenu; ?>
	
		</div>


	<footer>
		
		

		<ul class="nav navbar-light bg-light justify-content-between">
			
			<!-- Lien CGU -->
			
			<li class="nav-item">
		    	<a class="nav-item nav-link" href="index.php?page=accueil">Retour à l'accueil</a>
		    </li>
		   
		    <!-- Lien retour à l'accueil -->
			
			<li class="nav-item ">
				<a class="nav-item nav-link" href="other/CGU.pdf" target="_blank">Conditions générales d'utilisation</a>
		    </li>	

		</ul>

		

	</footer>	

</body>

</html>