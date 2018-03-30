<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 16/03/18
 * Time: 15:11
 */


echo '<div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
        <div class="card-body">
          <div class="table-responsive">';
echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
echo '      <thead><tr>Code utilisateur<th></th><th>Nom</th><th>Prenom</th><th>Zone</th><th>Nombre de biens en vente</th><th>Nombre de biens vendus</th><th>Chiffre d\'affaire</th></tr></thead><tboby>';

// Contenu du tableau
foreach($this->consultants as $consultant){
    echo '<tr>';
    echo '<td>',$consultant->getConsultantId(),'</td>';
    echo '<td>',$consultant->getNom(),'</td>';
    echo '<td>',$consultant->getPrenom(),'</td>';
    echo '<td>',$consultant->getZone(),'</td>';
    echo '<td>',$consultant->getNombreDeBiensEnVente(),'</td>';
    echo '<td>',$consultant->getNombreDeBiensVendus(),'</td>';
    echo '<td>',$consultant->getChiffreAffaire(),'</td>';
    echo '</tr>';
}

// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';

