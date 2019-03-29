
<!-- Dev mettre dans la base puis afficher 

//formulaire -->
<h1>Ajouter un angle</h1><br>

		<form method="post" action="" class='form-group'> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div>
				<label for="case_numangle" >Numéro d'angle</label> : 
			</div>
			<input class='form-control' type="text" name="case_numangle" id="case_numangle" /></input>
			<br />

			<div>
				<label for="case_nomangle" >Nom de l'angle (l'angle ne peut être enregistré que dans la langue française)</label> : 
			</div>
			<input class='form-control' type="text" name="case_nomangle" id="case_nomangle" /></input>
			<br />

			<!--<div>
				<label for="case_languangle" >Langue</label> : 
			</div>
			<textarea class='form-control' type="text" name="case_langueangle" id="case_langueangle" /></textarea>
			-->
			<br>
			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>
			
		</form>


<!-- Récupération pour les mettres dans la base de données -->

<?php

ini_set('display_errors','off'); //cache les messages d'erreur

	include ('connexion.php'); 
        $case_numangle = $_POST['case_numangle']; 
		$case_nomangle = $_POST['case_nomangle']; 
		$case_langueangle = "FRAN01"; 
        $requete="INSERT INTO angle VALUES ('$case_numangle','$case_nomangle','$case_langueangle')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>
