<?php

	function getArticles()
	{
		require('connexion.php');
		$req = $bdd->prepare('SELECT * FROM article ORDER BY NumArt DESC');
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_OBJ);
		return $data;
		$req->closeCursor();
	}
	
	function getArticle($id)
	{
		require('connexion.php');
		$req = $bdd->prepare('SELECT * FROM article WHERE NumArt = ?');
		$req->execute(array($id));
		if($req->rowCount() == 1)
		{
			$data = $req->fetch(PDO::FETCH_OBJ);
			return $data;
		}
		else
			header('Location: index.php?page=accueil');

	}

	function getMotCle($id)
	{
		require('connexion.php');
		$req = $bdd->prepare('SELECT motcle.LibMoCle FROM article, motclearticle, motcle WHERE article.NumArt = motclearticle.NumArt AND motcle.NumMoCle = motclearticle.NumMoCle AND NumArt = ?'); // requête avec jointure
		$req->execute(array($id));
		if($req->rowCount() == 1)
		{
			$data = $req->fetch(PDO::FETCH_OBJ);
			return $data;
		}
	}	


