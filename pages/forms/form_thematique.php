<!-- Dev mettre dans la base puis afficher

//formulaire -->

<h1>Ajouter une thématique</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div id="ecr_numtheme">
				<label for="case_numtheme" >Numéro de thématique</label> :
			</div>
			<input class="form-control" type="text" name="case_numtheme" id="case_numtheme" /></input>
			<br />
			

			<div id="ecr_nomtheme">
				<label for="case_nomtheme" >Intitulé thématique</label> :
			</div>
			<input class="form-control" type="text" name="case_nomtheme" id="case_nomtheme" /></input>
			<br />
			
			
			<div id="ecr_langtheme">
				<label for="case_langtheme" >Langue</label> :
			</div>
			<textarea class="form-control" type="text" name="case_langtheme" id="case_langtheme" /></textarea>
			
			<br>
			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>

		</form>


<!-- Récupération pour les mettres dans la base de données -->

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_numtheme = $_POST['case_numtheme']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_nomtheme = $_POST['case_nomtheme']; // récupère le produit de l'avis
		$case_langtheme = $_POST['case_langtheme']; // récupère l'avis
        $requete="INSERT INTO thematique VALUES ('$case_numtheme','$case_nomtheme','$case_langtheme')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>

<!-- Affichage des informations contenu dans la base de données -->
	<br><h4>Données contenues dans la base de données :</h4><br>
		<?php
			$reponse = $bdd->query('SELECT * FROM thematique');// requête à effectué
			while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
			{
		?>
				<div id="thematique" >
					
							<?php echo $donnees['NumThem']; ?><br />
				</div>
		<?php
			}
		?>
