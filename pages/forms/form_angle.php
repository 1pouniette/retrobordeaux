<!-- Dev mettre dans la base puis afficher 

//formulaire -->
<h1>Ajouter un angle</h1><br>

		<form method="post" action="" class='form-group'> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div id="ecr_numangle">
				<label for="case_numangle" >Numéro d'angle</label> : 
			</div>
			<input class='form-control' type="text" name="case_numangle" id="case_numangle" /></input>
			<br />

			<div id="ecr_nomangle">
				<label for="case_nomangle" >Nom de l'angle</label> : 
			</div>
			<input class='form-control' type="text" name="case_nomangle" id="case_nomangle" /></input>
			<br />

			<div id="ecr_langueangle">
				<label for="case_languangle" >Langue</label> : 
			</div>
			<textarea class='form-control' type="text" name="case_langueangle" id="case_langueangle" /></textarea>

			<br>
			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>

		</form>


<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_numangle = $_POST['case_numangle']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_nomangle = $_POST['case_nomangle']; // récupère le produit de l'avis
		$case_langueangle = $_POST['case_langueangle']; // récupère l'avis
        $requete="INSERT INTO angle VALUES ('$case_numangle','$case_nomangle','$case_langueangle')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>




<!-- Affichage des informations contenu dans la base de données -->

		<br><h4>Données contenues dans la base de données :</h4><br>
		<?php
			$reponse = $bdd->query('SELECT * FROM angle');// requête à effectué
			while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
			{
		?>
				<div id="angle" >
					<?php echo $donnees['NumAngl']; ?><br />
				</div>
					
		<?php
			}
		?>
