<?php
	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
	
	$mode_edition = 0;
	
	if (isset($_GET['edit']) AND !empty($_GET['edit'])) {
	  $mode_edition = 1;
	  $edit_id = ($_GET['edit']);
	  $edit_article = $bdd->prepare('SELECT * FROM article WHERE NumArt = ?');
	  $edit_article->execute(array($edit_id));

	  if ($edit_article->rowCount() == 1) {
		$edit_article = $edit_article->fetch();
	  }
	  else
	  {
		die('Erreur: l\'article concerné n\'existe pas !');
	  }
	}
	
	if(isset($_POST['btnEnvoyer'])) {
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
		$LienExt = 0;
		$NumAngl = $_POST['NumAngl'];
		$NumThem1 =  $_POST['NumThem1'];
		$NumLang = $_POST['NumLang'];
		
		if ($mode_edition == 0) {
		  $requete="INSERT INTO article VALUES ('$case_NumArt','$case_create','$case_title','$case_chapo','$case_text1','$case_sstitle1','$case_text2','$case_sstitle2','$case_text3','$case_conclu','$case_foto','$LienExt','$NumAngl','$NumThem1','$NumLang')"; // création de la requete pour enregistrer l'avis
		  $exec = $bdd->query($requete); // exécuter la requete

		  header('Location: index.php?page=article-form');
		}
		else
		{
		  $update = $bdd->prepare('UPDATE article SET NumArt = ?, DtCreA = ?, LibTitrA = ?, LibChapoA = ?, Parag1A = ?, LibSsTitr1 = ?, Parag2A = ?, LibSsTitr2 = ?, Parag3A = ?, LibConclA = ?, UrlPhotA = ?,LiensExternes = ?, NumAngl = ?, NumThem = ?, NumLang = ? WHERE NumArt = ?');
		  $update->execute(array($case_NumArt, $case_create, $case_title, $case_chapo, $case_text1, $case_sstitle1, $case_text2, $case_sstitle2, $case_text3, $case_conclu, $case_foto, $LienExt, $NumAngl, $NumThem1, $NumLang, $edit_id));
		  header('Location: index.php?page=article-form');
		}
	}
		
?>

<h1>Ajouter un article</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->

			<div>
				<label for="case_NumArt" >Numéro de l'article</label> : 
			</div>
			<input class="form-control" type="text" name="case_NumArt" id="case_NumArt" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['NumArt'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_create" >Date de création</label> : 
			</div>
			<input class="form-control" type="date" name="case_create" id="case_create" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['DtCreA'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_title" >Titre</label> : 
			</div>
			<input class="form-control" type="text" name="case_title" id="case_title" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['LibTitrA'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_chapo" >Chapo</label> : 
			</div>
			<input class="form-control" type="text" name="case_chapo" id="case_chapo" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['LibChapoA'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_text1" >Paragraphe 1</label> : 
			</div>
			<input class="form-control" type="text" name="case_text1" id="case_text1" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['Parag1A'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_sstitle1" >Sous-Titre 1</label> : 
			</div>
			<input class="form-control" type="text" name="case_sstitle1" id="case_sstitle1" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['LibSsTitr1'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_text2" >Paragraphe 2</label> : 
			</div>
			<input class="form-control" type="text" name="case_text2" id="case_text2" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['Parag2A'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_sstitle2" >Sous-Titre 2</label> : 
			</div>
			<input class="form-control" type="text" name="case_sstitle2" id="case_sstitle2" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['LibSsTitr2'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_text3" >Paragraphe 3</label> : 
			</div>
			<input class="form-control" type="text" name="case_text3" id="case_text3" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['Parag3A'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_conclu" >Conclusion</label> : 
			</div>
			<input class="form-control" type="text" name="case_conclu" id="case_conclu" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['LibConclA'] ?>" <?php } ?> /></input>
			<br />


			<div>
				<label for="case_foto" >Photo</label> : 
			</div>
			
			<input class="form-control" type="text" name="case_foto" id="case_foto" <?php if($mode_edition == 1) { ?> value="<?= $edit_article['UrlPhotA'] ?>" <?php } ?> /></input>
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



			<input class="btn btn-secondary" name="btnEnvoyer" type="submit" value="Envoyer" id="Bouton" />
		</form>


