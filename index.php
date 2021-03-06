<?php

// Démarrage de la temporisation (rien ne s'affichera)
ob_start() ;

// On teste si un paramètre qui s'appelle "page" est présent dans l'URL
if(isset($_GET['page']) and !empty($_GET)) {
	// Si cela existe on recupere sa valeur
	$page = $_GET['page'] ;
} 
// Si le parametre n'existe pas    
else { 
	// On donne une valeur par defaut à $page --> renvoie à l'accueil
	$page = 'accueil';
	$_page = 'accueil';
}


// Switch va tester la valeur de $page et le code correspondand au "cas"
switch($page) :

	// Si $page est égal à "accueil"
	case 'accueil' :
		// On integre le contenu de la page
		include 'pages/accueil.php' ;
	break;

	// Si $page est égal à "article"
	case 'article' :
		include 'pages/article.php' ;
	break;

	case 'about' :
		include 'pages/about.php' ;
	break;

	case 'angle' :
		include 'pages/forms/form_angle.php' ;
	break;

	case 'article-form' :
		include 'pages/forms/form_article.php' ;
	break;

	case 'connexion' :
		include 'pages/forms/form_connexion.php' ;
	break;

	case 'contact' :
		include 'pages/forms/form_contact.php' ;
	break;

	case 'langue' :
		include 'pages/forms/form_langue.php' ;
	break;

	case 'motcle' :
		include 'pages/forms/form_motcle.php' ;
	break;

	case 'thematique' :
		include 'pages/forms/form_thematique.php' ;
	break;

	// Si aucun "cas" ne correspond à la valeur de $page
	default :
		// On intègre la page d'accueil par défaut
   		include 'pages/accueil.php' ; 
	break;

endswitch ;

// On recupère dans une variable le contenu du tampon 
$contenu = ob_get_clean() ;

// On intègre le template qui utilise la variable $contenu 
include 'template/template.php' ;

?>