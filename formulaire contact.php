<!-- Dev mettre dans la base puis afficher 

//formulaire -->
<html>
	<body>
		<form method="post" action=""> <!--  action = page contenant du php pour récupérer les informations -->
			<div id="ecr_email">
				<label for="case_email" >E-mail</label> : 
			</div>
			<input type="text" name="case_email" id="case_email" /></input>
			<br />

			<div id="ecr_message">
				<label for="case_message" >Message</label> : 
			</div>
			<textarea type="text" name="case_message" id="case_message" /></textarea>
			<input type="submit" value="Envoyer" id="Bouton"/>
		</form>
	</body>
</html>

<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('coco.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_email = $_POST['case_email']; // récupère la date de l'avis, l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_message = $_POST['case_message']; // récupère l'avis
        $requete="INSERT INTO contact VALUES (NULL,'$case_email','$case_message')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>


