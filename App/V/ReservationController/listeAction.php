<?php

// Début des cadres et du tableau
echo '<div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> '.$this->title.\App\V\_helper\ReservationHelper::lienAjout().'</div>
        <div class="card-body">
          <div class="table-responsive">';
echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
echo '      <thead><tr><th>Date</th><th>Heure de début</th><th>NHeure de fin</th><th>Salle</th><th>Ligue</th><th></th></tr></thead><tboby>';

// Contenu du tableau
foreach($this->reservations as $reservation){
    echo '<tr>';
    echo '<td>',$reservation->getDate(),'</td>';
    echo '<td>',$reservation->getHeureDebut(),'</td>';
    echo '<td>',$reservation->getHeureFin(),'</td>';
    echo '<td>',$reservation->getSalle()->getLibelle(),'</td>';
    echo '<td>',$reservation->getLigue()->getLibelle(),'</td>';
    echo '<td>',  App\V\_helper\ReservationHelper::lienModification($reservation, 'Modifier'),' - ';
    echo App\V\_helper\ReservationHelper::lienSuppression($reservation, 'Supprimer'),'</td>';
    echo '</tr>';
}

// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';