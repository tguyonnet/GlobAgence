<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/04/18
 * Time: 14:04
 */
echo'<style>
     div.relative {
         position: relative;
         left: 500px;
     }
     div.card-img-bottom {
        border: 0;
        height: 20rem;
        background: url(https://picsum.photos/400/400/?random) center no-repeat;
        background-size: cover;
        float:left;
     }
     </style>';

foreach($this->biens as $bien) {

    //Texte a coté de l'image
    echo'<div class ="container">
         <div class="card text-black o-hidden">
         <div class="card-body">
         <div class="card-body-icon">';




    echo'<div class="col-xl-3 mt-2">
               <div class="card-img-bottom"></div>
         </div>';

    echo'<div class="relative">    
              Prix : ', $bien->getPrixHFAI(),' €',
        '<br/>Nombre de pièces : ', $bien->getNombrePieces(),
        '<br/>Nombre de chambres : ', $bien->getNombreChambres(),
        '<br/>Numéro de l\'appartement : ', $bien->getNumeroAppartement(),
        '<br/>Adresse : ', $bien->getRue(),' ', $bien->getLieuDit(),' ', $bien->getCodePostal(),' ', $bien->getVille(),
        '<br/>Superficie du bien : ', $bien->getSuperficieBien(),'m²',
        '<br/>Superficie du terrain : ', $bien->getSuperficieTerrain(),'m²',
        '<br/>Code de charge : ', $bien->getChargeId(),
        '<br/>Code de statut : ', $bien->getStatutId(),
        '<br/>Code d\'eau : ', $bien->getEauId(),
        '<br/>Code de chauffage : ', $bien->getChauffageId(),
        '<br/>Code de type de bien : ', $bien->getTypeBienId(), '</div>';

    echo'</div>
         </div>
         </div>
         </div>';

}
