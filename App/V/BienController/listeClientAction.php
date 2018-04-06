<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/04/18
 * Time: 14:04
 */
echo'<div class="card-header"> '.$this->title.'</div>';


foreach($this->biens as $bien) {

    //Texte a coté de l'image
    echo '  <div class="col-xl-3 mt-2">
            <div class="card text-black o-hidden">
            <div class="card-body">
            <div class="card-body-icon"></div>';


    echo '<div>Code de charge: ', $bien->getChargeId(), '</div>';
    echo '<div>Code de statut: ', $bien->getStatutId(), '</div>';
    echo '<div>Code d\'eau: ', $bien->getEauId(), '</div>';
    echo '<div>Code de chauffage: ', $bien->getChauffageId(), '</div>';
    echo '<div>Code de type de bien: ', $bien->getTypeBienId(), '</div>';
    echo '<div>Superficie du bien: ', $bien->getSuperficieBien(), '</div>';
    echo '<div>Superficie du terrain: ', $bien->getSuperficieTerrain(), '</div>';
    echo '<div>Prix HFAI: ', $bien->getPrixHFAI(), '</div>';
    echo '<div>Nombre de pièces: ', $bien->getNombrePieces(), '</div>';
    echo '<div>Nombre de chambres: ', $bien->getNombreChambres(), '</div>';
    echo '<div>Numéro de l\'appartement: ', $bien->getNumeroAppartement(), '</div>';
    echo '<div>Adresse: ', $bien->getRue(),' ', $bien->getLieuDit(),' ', $bien->getCodePostal(),' ', $bien->getVille(), '</div>';




    echo '   </div>
        </div>
        </div>';

}