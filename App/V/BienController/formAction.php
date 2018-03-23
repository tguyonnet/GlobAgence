<?php


echo '<div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire d\'ajout de bien</div>
      <div class="card-body" style="text-align: center;">
        <form method="post">
          <div class="form-group">
            <label for="superficieBien">Superficie du bien :</label>
            <input type="text" name="superficieBien" 
          </div>
          <div class="form-group">
            <label for="superficieTerrain">Superficie du terrain :</label>
            <input type="text" name="superficieTerrain">
          </div>
          <div class="form-group">
            <label for="prix">Prix :</label>
           <input type="text" name="prix">
          </div>
          <div class="form-group">
            <label for="image[1]">Photos :</label>
            <input type="file" name="image" size="10" multiple>
          </div>
          <div class="form-group">
            <label for="nbPiece">Nombre de pièce :</label>
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
            <label for="emissionGES">Emission GES :</label>
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
$extensions_valides=array('jpg','jpeg','png');

$extension_upload=strtolower(substr(strrchr($_FILES['icone']['name'],'.'),1));

if(in_array($extension_upload,$extensions_valides)) echo "Extension correcte";