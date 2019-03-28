<!-- Dev mettre dans la base puis afficher 

//formulaire -->

<h1>Ajouter une langue</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div id="ecr_numlangue">
				<label for="case_numlangue" >Numéro de langue</label> : 
			</div>
			<input class="form-control" type="text" name="case_numlangue" id="case_numlangue" /></input>
			<br />


			<div id="ecr_nomlangue">
				<label for="case_nomlangue" >Nom de langue</label> : 
			</div>
			<input class="form-control" type="text" name="case_nomlangue" id="case_nomlangue" /></input>
			<br />


			<div id="ecr_nomlangue2">
				<label for="case_nomlangue2" >Langue</label> : 
			</div>
			<textarea class="form-control" type="text" name="case_nomlangue2" id="case_nomlangue2" /></textarea>
			
			<br>
			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>
		
		</form>


<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_numlangue = $_POST['case_numlangue']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_nomlangue = $_POST['case_nomlangue']; // récupère le produit de l'avis
		$case_nomlangue2 = $_POST['case_nomlangue2']; // récupère l'avis
        $requete="INSERT INTO langue VALUES ('$case_numlangue','$case_nomlangue','$case_nomlangue2')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>



<!-- Affichage des informations contenu dans la base de données -->
<br><h4>Données contenues dans la base de données :</h4><br>
		<?php
			$reponse = $bdd->query('SELECT * FROM langue');// requête à effectué
			while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
			{
		?>
				<div id="langue" >
					
					<?php echo $donnees['NumLang']; ?><br />
				</div>
					
		<?php
			}
		?>
