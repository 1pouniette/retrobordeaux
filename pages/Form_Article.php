<html>
	<body>
		<form method="post" action=""> <!--  action = page contenant du php pour récupérer les informations -->
			<div id="ecr_date">
				<label for="case_NumArt" >Numéro de l'article</label> : 
			</div>
			<input type="text" name="case_NumArt" id="case_NumArt" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_create" >Date de création</label> : 
			</div>
			<input type="date" name="case_create" id="case_create" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_title" >Titre</label> : 
			</div>
			<input type="text" name="case_title" id="case_title" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_chapo" >Chapo</label> : 
			</div>
			<input type="text" name="case_chapo" id="case_chapo" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_text1" >Paragraphe 1</label> : 
			</div>
			<input type="text" name="case_text1" id="case_text1" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_sstitle1" >Sous-Titre 1</label> : 
			</div>
			<input type="text" name="case_sstitle1" id="case_sstitle1" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_text2" >Paragraphe 2</label> : 
			</div>
			<input type="text" name="case_text2" id="case_text2" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_sstitle2" >Sous-Titre 2</label> : 
			</div>
			<input type="text" name="case_sstitle2" id="case_sstitle2" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_text3" >Paragraphe 3</label> : 
			</div>
			<input type="text" name="case_text3" id="case_text3" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_conclu" >Conclusion</label> : 
			</div>
			<input type="text" name="case_conclu" id="case_conclu" /></input>
			<br />
			<div id="ecr_produit">
				<label for="case_foto" >Photo</label> : 
			</div>
			<input type="text" name="case_foto" id="case_foto" /></input>
			<br />
			<div id="ecr_produit">
				<label for="NumAngl" >Numéro de l'Angle</label> : 
			</div>
			<select name="NumAngl" id="NumAngl">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM angle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['NumAngl']); ?>"> <?php echo $donnees['LibAngl']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />
			<div id="ecr_produit">
				<label for="NumThem1" >Numéro de la thématique</label> : 
			</div>
			<select name="NumThem1" id="NumThem1">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM thematique');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['NumThem']); ?>"> <?php echo $donnees['LibThem']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />
			<div id="ecr_produit">
				<label for="NumLang" >Langue</label> : 
			</div>
			<select name="NumLang" id="NumLang">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM langue');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['NumLang']); ?>"> <?php echo $donnees['Lib1Lang']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />
			<input type="submit" value="Envoyer" id="Bouton"/>
		</form>
	</body>
</html>

<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_NumArt = $_POST['case_NumArt']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_create = $_POST['case_create']; // récupère le produit de l'avis
		$case_title = $_POST['case_title']; // récupère l'avis
		$case_chapo = $_POST['case_chapo'];
		$case_text1 = $_POST['case_text1'];
		$case_sstitle1 = $_POST['case_sstitle1'];
		$case_text2 = $_POST['case_text2'];
		$case_sstitle2 = $_POST['case_sstitle2'];
		$case_text3 = $_POST['case_text3'];
		$case_conclu = $_POST['case_conclu'];
		$case_foto = $_POST['case_foto'];
		$NumAngl = $_POST['NumAngl'];
		$NumThem1 =  $_POST['NumThem1'];;
		$NumLang=$_POST['NumLang'];
        $requete="INSERT INTO article VALUES ('$case_NumArt','$case_create','$case_title','$case_chapo','$case_text1','$case_sstitle1','$case_text2','$case_sstitle2','$case_text3','$case_conclu','$case_foto','$NumAngl','$NumThem1','$NumLang')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>
