<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 13/04/18
 * Time: 14:11
 */


echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire d\'ajout de consultant</div>
      <div class="card-body text-center">
        <form method="post" action="?c=Consultant&a=queryForm">
          <div class="form-group">
            <label for="nom">Nom :</label><br />
            <input type="text" name="nom" placeholder="Nom">
          </div>  
          <div class="form-group">
            <label for="prenom">Prénom :</label><br />
            <input type="text" name="prenom" placeholder="Prénom">
          </div>
          <div class="form-group">
            <label for="dateNaissance">Date de naissance :</label><br />
            <input type="date" name="dateNaissance" placeholder="Date de naissance">
          </div>
          <div class="form-group">
            <label for="email">Email :</label><br />
            <input type="text" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="telephone">Numéro de téléphone :</label><br />
            <input type="text" name="telephone" placeholder="Téléphone">
          </div>
          <div class="form-group">
          <label for="rue">Rue :</label><br />
            <input type="text" name="rue" placeholder="Rue">
         </div>
         <div>
         <div class="form-group">
         <label for="ville">Ville :</label><br />
            <input type="text" name="ville" placeholder="Ville">
          </div>
          <div>
          <div class="form-group">
          <label for="codePostal">Code Postal :</label><br />
            <input type="text" name="codePostal" placeholder="Code Postal">
          </div>
         <div class="form-group">
            <label for="valider">Valider :</label><br />
            <input type="submit" name="valider">
          </div>
        </form>
      </div>
      </div>    
    </div>';
