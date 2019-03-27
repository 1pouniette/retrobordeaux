<?php
try 
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=Base;charset=utf8', 'root', 'root'); // connexion à la base de donnée
}
catch (Exception $e) // affiche un message d'erreur si la connexion ne se fait pas
{
        die('Erreur : ' . $e->getMessage());
}
?>