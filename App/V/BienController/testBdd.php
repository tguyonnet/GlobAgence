<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 30/03/18
 * Time: 14:05
 */
function envoyerBien($connexion, $login, $superficieBien, $superficieTerrain, $prixHfai, $nbPiece, $numAppartement, $nombreChambre, $ville, $codepostal){
    if(isset($_POST['VILLE']) && ($_POST['CODEPOSTAL']) && isset($_POST['SUPERFICIE_BIEN']) && isset($_POST['SUPERFICIE_TERRAIN']) && isset($_POST['PRIX_HFAI'])
        /**&& isset['PHOTOS']*/ && isset($_POST['NOMBRE_DE_PIECE']) && isset($_POST['NUM_APPARTEMENT']) && isset($_POST['NOMRE_DE_CHAMBRE'])){
            $_POST['SUPERFICIE_BIEN']=$superficieBien;
            $_POST['SUPERFICIE_TERRAIN']=$superficieTerrain;
            $_POST['PRIX_HFAI']=$prixHfai;
            $_POST['NOMBRE_DE_PIECE']=$nbPiece;
            $_POST['NUM_APPARTEMENT']=$numAppartement;
            $_POST['NOMRE_DE_CHAMBRE']=$nombreChambre;
            $_POST['VILLE']=$ville;
            $_POST['CODEPOSTAL']=$codepostal;
    }
}
$connexion = mysql_connect('172.21.4.195', 'usergrant', 'pwgrant');
mysql_select_db('GlobAgence_v1',$connexion) or die("Impossible d'ouvrir la base");
$login = "$_SESSION[login]";


$req=$db->query("INSERT INTO BIEN (SUPERFICIE_BIEN, SUPERFICIE_TERRAIN, PRIX_HFAI, NOMBRE_DE_PIECE, NUM_APPARTEMENT, NOMBRE_DE_CHAMBRE, VILLE, CODEPOSTAL) 
VALUES ('$superficieBien','$superficieTerrain','$prixHfai','$nbPiece','$numAppartement','$nombreChambre','$ville','$codepostal')");