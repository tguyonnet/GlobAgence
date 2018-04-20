<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/04/18
 * Time: 17:12
 */
/*echo "<h1>Ville : ".$this->ville."</h1>";
echo '<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>';

                foreach ($this->biens as $bien)
                {
                 echo '<tr><td>';
                 echo $bien->getVille();
                 echo '</td></tr>';

                 }
                echo '
                </tbody>
                </table>
                </div>';

echo "<h1>Code postal : ".$this->codePostal."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getCodePostal();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Rue : ".$this->rue."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getRue();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Numéro d'appartement : ".$this->numeroAppartement."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getNumeroAppartement();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Lieu dit : ".$this->lieuDit."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getlieuDit();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Superficie du mega chevalier : ".$this->superficieBien."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getSuperficieBien();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Superficie du terrain : ".$this->superficieTerrain."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getSuperficieTerrain();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Prix HFAI : ".$this->prixHFAI."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getprixHFAI();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Numéro du batiment".$this->numerobatiment."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getNumeroBatiment();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Type de bien : ".$this->typeBienId."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getTypeBienId();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Nombre de pièces".$this->nombrePieces."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getNombrePieces();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>Nombre de chambres".$this->nombreChambres."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->getNombreChambres();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';*/
    
$ville = $_POST['ville'];
$codePostal = $_POST['codePostal'];
$rue = $_POST['rue'];
$numeroAppartement = $_POST['numeroAppartement'];
$lieuDit = $_POST['lieuDit'];
$superficieBien = $_POST['superficieBien'];
$superficieTerrain = $_POST['superficieTerrain'];
$prixHFAI = $_POST['prixHFAI'];
$numeroBatiment = $_POST['numeroBatiment'];
$nbPiece = $_POST['nbPiece'];
$nbChambre = $_POST['nbChambre'];
$ecoLogement = $_POST['ecoLogement'];
$emissionGES = $_POST['emissionGES'];





echo '<br /><h1 style=text-align:center;> Le bien a correctement été ajouté</h1>'.'<br />'.
    '<t>ville : ' .$ville.'</t>'.'<br />'.
    '<t>code postal : '.$codePostal.' </t>'.'<br />'.
    '<t>rue : '.$rue.' </t>'.'<br />'.
    '<t>numéro d\'appartement : ' .$numeroAppartement.'</t>'.'<br />'.
    '<t>lieu dit : ' .$lieuDit.'</t>'.'<br />'.
    '<t>superficie du bien : ' .$superficieBien.'</t>'.'<br />'.
    '<t>superficie du terrain : ' .$superficieTerrain.'</t>'.'<br />'.
    '<t>prix HFAI : ' .$prixHFAI.'</t>'.'<br />'.
    '<t>numéro du batiment : ' .$numeroBatiment.'</t>'.'<br />'.
    '<t>nombre de pièces : ' .$nbPiece.'</t>'.'<br />'.
    '<t>nombre de chambres : ' .$nbChambre.'</t>'.'<br />'.
    '<t>éco logement : ' .$ecoLogement.'</t>'.'<br />'.
    '<t>émission GES : ' .$emissionGES.'</t>'.'<br />';