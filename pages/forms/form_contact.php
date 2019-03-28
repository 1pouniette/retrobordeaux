

    <div class="form-group"><img src ="img/onglets_contact.svg" class="rounded mx-auto d-block" alt="contact"style= "margin: 0 auto; margin-top: 3%;max-width: 200px; height: 100px; background color: white; border-radius:3px;">

			<img src ="img/onglets_barre_contact.svg" class="rounded mx-auto d-block" alt="contact"style= "margin-top:-4%; margin-left:35%; max-width: 300px; height: 100px; background color: white; border-radius: 3px;">
		</div>		

 <form>

   <div class="form-group" style="margin: 0 auto; max-width: 500px; height: 100px; background-color: white; border-radius: 3px;">
       <label for="case_email"></label>
       <input type="email" class="form-control" name="case_email" id="case_email" placeholder="Email">
   </div>

   <div class="form-group" style="margin: 0 auto; max-width: 500px; height: 100px; background-color: white; border-radius: 3px;">
       <label for="case_message"></label>
       <textarea class="form-control" name="case_message" id="case_message" placeholder="Votre message..." rows="10"></textarea>
       <br>
       <input type="button" value="Envoyer" class="btn btn-outline-secondary" id="Bouton" />
   </div>

 </form>

<?php
  include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_email = $_POST['case_email']; // récupère la date de l'avis, l'information contenu dans les crochets vient du name mis dans le formulaire
    $case_message = $_POST['case_message']; // récupère l'avis
        $requete="INSERT INTO contact VALUES (NULL,'$case_email','$case_message')"; // création de la requete pour enregistrer l'avis
    $exec = $bdd->query($requete); // exécuter la requete
?>





		

	