
<h1>Ajouter un article</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->

			<div>
				<label for="case_NumArt" >Numéro de l'article</label> : 
			</div>
			<input class="form-control" type="text" name="case_NumArt" id="case_NumArt" /></input>
			<br />


			<div>
				<label for="case_create" >Date de création</label> : 
			</div>
			<input class="form-control" type="date" name="case_create" id="case_create" /></input>
			<br />


			<div>
				<label for="case_title" >Titre</label> : 
			</div>
			<input class="form-control" type="text" name="case_title" id="case_title" /></input>
			<br />


			<div>
				<label for="case_chapo" >Chapo</label> : 
			</div>
			<input class="form-control" type="text" name="case_chapo" id="case_chapo" /></input>
			<br />


			<div>
				<label for="case_text1" >Paragraphe 1</label> : 
			</div>
			<input class="form-control" type="text" name="case_text1" id="case_text1" /></input>
			<br />


			<div>
				<label for="case_sstitle1" >Sous-Titre 1</label> : 
			</div>
			<input class="form-control" type="text" name="case_sstitle1" id="case_sstitle1" /></input>
			<br />


			<div>
				<label for="case_text2" >Paragraphe 2</label> : 
			</div>
			<input class="form-control" type="text" name="case_text2" id="case_text2" /></input>
			<br />


			<div>
				<label for="case_sstitle2" >Sous-Titre 2</label> : 
			</div>
			<input class="form-control" type="text" name="case_sstitle2" id="case_sstitle2" /></input>
			<br />


			<div>
				<label for="case_text3" >Paragraphe 3</label> : 
			</div>
			<input class="form-control" type="text" name="case_text3" id="case_text3" /></input>
			<br />


			<div>
				<label for="case_conclu" >Conclusion</label> : 
			</div>
			<input class="form-control" type="text" name="case_conclu" id="case_conclu" /></input>
			<br />


			<div>
				<label for="case_foto" >Photo</label> : 
			</div>
			
			<input class="form-control" type="text" name="case_foto" id="case_foto" /></input>
			<br />


			<div>
				<label for="NumAngl" >Numéro de l'angle</label> : 
			</div>
			<select class="form-control" name="NumAngl" id="NumAngl">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM angle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['NumAngl']); ?>"> <?php echo $donnees['LibAngl']; ?></option>
				<?php
				}
				 
				ini_set('display_errors','off'); //cache les messages d'erreur

				?>


			</select>
			<br />


			<div>
				<label for="NumThem1" >Thématique</label> : 
			</div>
			<select class="form-control" name="NumThem1" id="NumThem1">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM thematique');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibThem']); ?>"> <?php echo $donnees['LibThem']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />


			<div>
				<label for="NumLang" >Langue</label> : 
			</div>
			<select class="form-control" name="NumLang" id="NumLang">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM langue');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibLang']); ?>"> <?php echo $donnees['Lib1Lang']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />


<div class="form-row">
	<div class="col">

			<div>
				<label for="NumMoCle" >Mot-clé 1</label> : 
			</div>
			<select class="form-control" name="MotCle1" id="NumMoCle">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM motcle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibMoCle']); ?>"> <?php echo $donnees['LibMoCle']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />

	</div>
	<div class="col">		

			<div>
				<label for="NumMoCle" >Mot-clé 2</label> : 
			</div>
			<select class="form-control" name="MotCle2" id="NumMoCle">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM motcle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibMoCle']); ?>"> <?php echo $donnees['LibMoCle']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />

	</div>
	<div class="col">

			<div>
				<label for="NumMoCle" >Mot-clé 3</label> : 
			</div>
			<select class="form-control" name="MotCle3" id="NumMoCle">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM motcle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibMoCle']); ?>"> <?php echo $donnees['LibMoCle']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />

	</div>
	</div>
	<div class="form-row">
		<div class="col">		

			<div>
				<label for="NumMoCle" >Mot-clé 4</label> : 
			</div>
			<select class="form-control" name="MotCle4" id="NumMoCle">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM motcle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibMoCle']); ?>"> <?php echo $donnees['LibMoCle']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />

		</div>
		<div class='col'>	

			<div>
				<label for="NumMoCle" >Mot-clé 5</label> : 
			</div>
			<select class="form-control" name="MotCle5" id="NumMoCle">
     			<?php
 				include ('connexion.php');
				$reponse = $bdd->query('SELECT * FROM motcle');
				 
				while ($donnees = $reponse->fetch())
				{
				?>
				           <option value="<?php echo($donnees['LibMoCle']); ?>"> <?php echo $donnees['LibMoCle']; ?></option>
				<?php
				}
				 
				?>
			</select>
			<br />

		</div>

		<div class='col'></div>

		</div>





			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>
		</form>


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
		$NumThem1 =  $_POST['NumThem1'];
		$NumLang=$_POST['NumLang'];

		$MotCle1=$_POST['MotCle1'];
		$MotCle2=$_POST['MotCle2'];
		$MotCle3=$_POST['MotCle3'];
		$MotCle4=$_POST['MotCle4'];
		$MotCle5=$_POST['MotCle5'];

		var_dump($MotCle1);
		var_dump($MotCle2);
		var_dump($MotCle3);
		var_dump($MotCle4);
		var_dump($MotCle5);



        $requete="INSERT INTO article (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, LiensExternes, NumAngl, NumThem, NumLang, NumMoCle, MotCle1, MotCle2, MotCle3, MotCle4, MotCle5) VALUES ('$case_NumArt','$case_create','$case_title','$case_chapo','$case_text1','$case_sstitle1','$case_text2','$case_sstitle2','$case_text3','$case_conclu','$case_foto', 'NULL', '$NumAngl','$NumThem1','$NumLang', 'NULL', '$MotCle1','$MotCle2','$MotCle3','$MotCle4','$MotCle5')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete

