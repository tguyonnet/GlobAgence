<?php


echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire d\'ajout de bien</div>
      <div class="card-body text-center">
        <form method="post" action="?c=Bien&a=queryForm">
          <div class="form-group">
            <label for="ville">Ville :</label>
            <input type="text" name="ville">
          </div>  
          <div class="form-group">
            <label for="codePostal">Code postal :</label>
            <input type="text" name="codePostal">
          </div>
          <div class="form-group">
            <label for="rue">Numéro de rue :</label>
            <input type="text" name="rue">
          </div>
          <div class="form-group">
            <label for="type">Type du bien :</label>
            <SELECT name="type" size="1">
            <OPTION>Maison avec terrain
            <OPTION>Maison sans terrain
            <OPTION>Appartement
            <OPTION>Terrain seul
            <OPTION>Local entreprise
            <OPTION>Parking 
            </SELECT>
          </div>
          <div class="form-group">
            <label for="numBatiment">Numéro du batiment(uniquement appartement) :</label>
            <input type="text" name="numeroBatiment">
          </div>
          <div class="form-group">
            <label for="lieuDit">Lieu dit :</label>
            <input type="text" name="lieuDit">
          </div>
          <div class="form-group">
            <label for="numAppartement">Numéro de l\'appartement :</label>
            <input type="text" name="numeroAppartement">
          </div>
          <div class="form-group">
            <label for="superficieBien">Superficie du bien :</label>
            <input type="text" name="superficieBien">
          </div>
          <div class="form-group">
            <label for="superficieTerrain">Superficie du terrain :</label>
            <input type="text" name="superficieTerrain">
          </div>
          <div class="form-group">
            <label for="prixHFAI">Prix :</label>
           <input type="text" name="prixHFAI">
          </div>
          <div class="form-group">
            <label for="image[1]">Photos :</label>
            <input type="file" name="image" size="10" multiple>
          </div>
          <div class="form-group">
            <label for="nbPiece">Nombre de pièces :</label>
            <input type="text" name="nbPiece">
          </div>
          <div class="form-group">
            <label for="nbChambre">Nombre de chambre :</label>
            <input type="text" name="nbChambre">
          </div>
          <div class="form-group">
            <label for="ecoLogement">Eco Logementl :</label>
            <input type="checkbox" name="ecoLogement">
          </div>
          <div class="form-group">
            <label for="emissionGES">Emisssion GES :</label>
            <input type="checkbox" name="emissionGES">
          </div>
         <div class="form-group">
            <label for="valider">Valider :</label>
            <input type="submit" name="valider">
          </div>
        </form>
      </div>
      </div>
    </div>';






//---------------------------------------------------------------------------

