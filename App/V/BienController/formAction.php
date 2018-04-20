<?php


echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire d\'ajout de bien</div>
      <div class="card-body text-center">
        <form method="post" action="?c=Bien&a=queryForm">
          <div class="form-group">
            <label for="ville">Ville :</label><br />
            <input type="text" name="ville" placeholder="Ville">
          </div>  
          <div class="form-group">
            <label for="codePostal">Code postal :</label><br />
            <input type="text" name="codePostal" placeholder="Code postal">
          </div>
          <div class="form-group">
            <label for="rue">Numéro de rue :</label><br />
            <input type="text" name="rue" placeholder="Rue">
          </div>
          <div class="form-group">
            <label for="type">Type du bien :</label><br />
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
            <label for="numBatiment">Numéro du batiment(uniquement appartement) :</label><br />
            <input type="text" name="numeroBatiment" placeholder="Numéro du batiment">
          </div>
          <div class="form-group">
            <label for="lieuDit">Lieu dit :</label><br />
            <input type="text" name="lieuDit" placeholder="Lieu dit">
          </div>
          <div class="form-group">
            <label for="numAppartement">Numéro de l\'appartement :</label><br />
            <input type="text" name="numeroAppartement" placeholder="Numéro de l\'appartement">
          </div>
          <div class="form-group">
          <label for="numAppartement">Numéro du batiment :</label><br />
            <input type="text" name="numbatiment" placeholder="Numéro du batiment">
          </div>
          <div class="form-group">
            <label for="superficieBien">Superficie du bien :</label><br />
            <input type="text" name="superficieBien" placeholder="Superficie du bien">
          </div>
          <div class="form-group">
            <label for="superficieTerrain">Superficie du terrain :</label><br />
            <input type="text" name="superficieTerrain" placeholder="Superficie du terrain">
          </div>
          <div class="form-group"> 
            <label for="prixHFAI">Prix :</label><br />
           <input type="text" name="prixHFAI" placeholder="Prix">
          </div>
          <div class="form-group">
            <label for="image[1]">Photos :</label><br />
            <input type="file" name="image" size="10" multiple>
          </div>
          <div class="form-group">  
            <label for="nbPiece">Nombre de pièces :</label><br />
            <input type="text" name="nbPiece" placeholder="Nombre de pièces">
          </div>
          <div class="form-group">
            <label for="nbChambre">Nombre de chambre :</label><br />
            <input type="text" name="nbChambre" placeholder="Nombre de chambre">
          </div>
          <div class="form-group">
            <label for="ecoLogement">Eco Logement :</label><br />
            <input type="checkbox" name="ecoLogement">
          </div>
          <div class="form-group">
            <label for="emissionGES">Emission GES :</label><br />
            <input type="checkbox" name="emissionGES">
          </div>
         <div class="form-group">
            <label for="valider">Valider :</label><br />
            <input type="submit" name="valider">
          </div>
        </form>
      </div>
      </div>
    </div>';


//-----------------------------------------------------------------------------------

/*$ville = $_POST['ville'];
$codePostal = $_POST['codepostal'];
$rue = $_POST['rue'];

// verifie si les cases sont remplies
if(!isset($_POST['ville']) ||
    !isset($_POST['codepostal']))

    {
    died('Désolé, il y a un problçeme avec le formulaire que vous avez rempli');
}

$ville = $_POST['ville']; // required
$cotal = $_POST['codepostal']; // required*/






//---------------------------------------------------------------------------




