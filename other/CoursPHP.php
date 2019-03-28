<!-- Dev mettre dans la base puis afficher 

//formulaire -->
<html>
	<body>
		<form method="post" action=""> <!--  action = page contenant du php pour récupérer les informations -->
			<div id="ecr_date">
				<label for="case_date" >Date d'achat</label> : 
			</div>
			<input type="date" name="case_date" id="case_date" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_produit" >Nom Produit</label> : 
			</div>
			<input type="text" name="case_produit" id="case_produit" /></input>
			<br />
			<div id="ecr_avis">
				<label for="case_avis" >Votre avis</label> : 
			</div>
			<textarea type="text" name="case_avis" id="case_avis" /></textarea>
			<input type="submit" value="Envoyer" id="Bouton"/>
		</form>
	</body>
</html>

<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_date = $_POST['case_date']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_produit = $_POST['case_produit']; // récupère le produit de l'avis
		$case_avis = $_POST['case_avis']; // récupère l'avis
        $requete="INSERT INTO avis VALUES (NULL,'$case_avis','$case_produit','$case_date')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>

<!-- Affichage des informations contenu dans la base de données -->

		<?php
			$reponse = $bdd->query('SELECT * FROM Avis ORDER BY date DESC ');// requête à effectué
			while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
			{
		?>
				<div id="produitavis" >
					<?php // Permet de changer la forme de la date 
						date_default_timezone_set('Europe/Paris');
						$date = $donnees['date']; // récupère la donnée date dans la base de donnée
						$dt = DateTime::createFromFormat('Y-m-d', $date); //intente le format
					?>
					<div class="slides2">
						<div id="avis_infos">
							<img src="coeur.png" width="20px" id="coeur">
							<?php echo $dt ->format('d/m/Y');?> <!-- affiche la date dans le bon format -->
							<?php echo $donnees['article']; ?><br /> <!-- affiche la donnée "article" contenu dans la base de donnée -->
						</div>
						<div id="avis_avis">
							<?php echo $donnees['avis']; ?><br />
						</div>
					</div>
				</div>
		<?php
			}
		?>
