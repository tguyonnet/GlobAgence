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
echo '      <thead><th>Nom</th><th>Prenom</th><th>Zone</th></tr></thead><tbody>';

// Contenu du tableau
foreach($this->consultants as $consultant){
    echo '<tr>';
    echo '<td>',$consultant->getNom(),'</td>';
    echo '<td>',$consultant->getPrenom(),'</td>';
    echo '<td>',$consultant->getZone(),'</td>';
    echo '</tr>';
}

// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';

