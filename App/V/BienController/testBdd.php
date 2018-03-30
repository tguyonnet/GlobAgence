<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 30/03/18
 * Time: 14:05
 */
function envoyerBien($connexion, $login){
    if(isset($_POST['SUPERFICIE_BIEN']) && isset($_POST['SUPERFICIE_TERRAIN']) && isset($_POST['PRIX_HFAI']) /**&& isset['PHOTOS']*/ && isset($_POST['NOMBRE_DE_PIECE']) && isset($_POST['NUM_APPARTEMENT']) && isset($_POST['NOMRE_DE_CHAMBRE']) && isset($_POST['NOMRE_DE_CHAMBRE'])){

    }
}
$connexion = mysql_connect('172.21.4.195', 'usergrant', 'pwgrant');



$req=$db->query("SELECT * FROM bien");