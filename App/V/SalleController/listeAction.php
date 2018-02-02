<?php

// Début des cadres et du tableau
echo '<div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
        <div class="card-body">
          <div class="table-responsive">';
echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
echo '      <thead><tr><th>Nom</th><th>Nombre de places</th></tr></thead><tboby>';

// Contenu du tableau
foreach($this->salles as $salle){
    echo '<tr>';
    echo '<td>',$salle->getLibelle(),'</td>';
    echo '<td>',$salle->getNbPlaces(),'</td>';
    echo '</tr>';
}


// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';