<!-- Dev mettre dans la base puis afficher

//formulaire -->
<html>
	<body>
		<form method="post" action=""> <!--  action = page contenant du php pour récupérer les informations -->
			<div id="ecr_nummotcle">
				<label for="case_nummotcle" >Numéro de mot clé</label> :
			</div>
			<input type="text" name="case_nummotcle" id="case_nummotcle" /></input>
			<br />
			<div id="ecr_nommotcle">
				<label for="case_nommotcle" >Mot clé</label> :
			</div>
			<input type="text" name="case_nommotcle" id="case_nommotcle" /></input>
			<br />
			<div id="ecr_langmotcle">
				<label for="case_langmotcle" >Langue</label> :
			</div>
			<textarea type="text" name="case_langmotcle" id="case_langmotcle" /></textarea>
			<input type="submit" value="Envoyer" id="Bouton"/>
		</form>
	</body>
</html>

<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_nummotcle = $_POST['case_nummotcle']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_nommotcle = $_POST['case_nommotcle']; // récupère le produit de l'avis
		$case_langmotcle = $_POST['case_langmotcle']; // récupère l'avis
        $requete="INSERT INTO motcle VALUES ('$case_nummotcle','$case_nommotcle','$case_langmotcle')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>

<!-- Affichage des informations contenu dans la base de données -->

		<?php
			$reponse = $bdd->query('SELECT * FROM motcle');// requête à effectué
			while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
			{
		?>
				<div id="motcle" >
							<?php echo $donnees['NumMoCle']; ?><br />
				</div>
		<?php
			}
		?>
