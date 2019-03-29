<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
  </head>

  <body>

          <div class="form-group">

            <img src ="connexion_onglet.svg" class="rounded mx-auto d-block" alt="contact"style= "margin: 0 auto; margin-top: 3%;max-width: 200px; height: 100px; background color: white; border-radius:3px;">

            <img src ="onglets_barre_contact.svg" class="rounded mx-auto d-block" alt="contact"style= "margin-top:-4%; margin-left:35%; max-width: 300px; height: 100px; background color: white; border-radius: 3px;">
        </div>

		<?php if ($id!=0) erreur(ERR_IS_CO); 
		session_start();
		?>
    <form>

        <div class="form-group" style="margin: 0 auto; max-width: 500px; height: 100px; background-color: white; border-radius: 3px;">
          <label for="exampleInputEmail1">Adresse email</label>
          <input type="email" name="Mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez email">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group" style="margin: 0 auto; max-width: 500px; height: 100px; background-color: white; border-radius: 3px;">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
          <br>
          <button type="button" class="btn btn-outline-secondary">Se connecter</button>
        </div>


    </form>
	
	<!-- test si un utilisateur est déja connecter -->
	<?php

	?>

  </body>
</html>
