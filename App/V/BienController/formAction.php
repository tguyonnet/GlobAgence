<?php


echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire d\'ajout de bien</div>
      <div class="card-body" style="text-align: center;">
        <form method="post">
          <div class="form-group">
            <label for="ville">Ville :</label>
            <input type="text" name="ville">
          </div>  
          <div class="form-group">
            <label for="codePostal">Code postal :</label>
            <input type="text" name="codepostal">
          </div>
          <div class="form-group">
            <label for="rue">Numéro de rue :</label>
            <input type="text" name="rue">
          </div>
          <div class="form-group">
            <label for="type">Type du bien :</label>
            <SELECT name="type" size="1">
            <OPTION>Maison avec terrain pwroot
            <OPTION>Maison sans terrain
            <OPTION>Appartement
            <OPTION>Terrain seul
            <OPTION>Local entreprise
            <OPTION>Parking
            </SELECT>
          </div>
          <div class="form-group">
            <label for="numBatiment">Numéro du batiment(uniquement appartement) :</label>
            <input type="text" name="numbatiment">
          </div>
          <div class="form-group">
            <label for="numAppartement">Numéro de l\'appartement :</label>
            <input type="text" name="numappartement">
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


// on teste la déclaration de nos variables
if (isset($_POST['ville']) && isset($_POST['codepostal'])) {
	// on affiche nos résultats
	echo 'votre ville : '.$_POST['ville'].' code postal : '.$_POST['codepostal'];
}


//$extensions_valides=array('jpg','jpeg','png');

//$extension_upload=strtolower(substr(strrchr($_FILES['icone']['name'],'.'),1));

//if(in_array($extension_upload,$extensions_valides)) echo "Extension correcte";
//---------------------------------------------------------------------------
/*$MonFormulaire = function ($Var1='',$Var2='') {
    return '
<form action="./" method="post">
<input type="text" name="var1" value="'.$Var1.'" />
<input type="text" name="var2" value="'.$Var2.'" />
<input type="submit" value="Envoyer" />
</form>
';
};

//formulaire rempli avec, par exemple, le contenu de ta bdd
echo $MonFormulaire('test','coucou');

// formulaire vierge
echo $MonFormulaire();*/
