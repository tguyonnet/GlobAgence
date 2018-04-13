<?php

echo '<div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
        <div class="card-body">
          <div class="table-responsive">';
echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
    echo'    <thead><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Email</th><th>Telephone</th><th>Adresse</th></tr></thead><tboby>';

    foreach($this->utilisateurs as $utilisateur) {
        echo '<tr>';
        echo '<td>', $utilisateur->getNOM(), '</td>';
        echo '<td>', $utilisateur->getPRENOM(), '</td>';
        echo '<td>', $utilisateur->getDATENAISSANCE(), '</td>';
        echo '<td>', $utilisateur->getEMAIL(), '</td>';
        echo '<td>', $utilisateur->getTELEPHONE(), '</td>';
        echo '<td>', $utilisateur->getRUE(),' - ', $utilisateur->getVILLE(), ' - ', $utilisateur->getCODEPOSTAL(), '</td>';
        echo '</tr>';
    }




// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';