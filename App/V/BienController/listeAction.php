<?php
// Contenu du tableau

echo '<!-- Comtenu du tableau-->
          <!--div class="container"-->
          <div class="card card-login mx-auto mt-2">
          <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
          <div class="card-body" style="text-align:center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead><tr><th>Code de charge</th><th>Code de statut</th><th>Code d\'eau</th><th>Code de chauffage</th><th>Code de type de bien</th>
                        <th>Superficie du bien</th><th>Superficie du terrain</th><th>Prix HFAI</th><th>Nombre de pièces</th><th>Nombre de chambres</th><th>Rue</th>
                        <th>Lieu dit</th><th>Numéro</th><th>Code postal</th><th>Ville</th></tr></thead>';

                foreach($this->biens as $bien){

                            echo '<tr>';
                            echo '<td>',$bien->getChargeId(),'</td>';
                            echo '<td>',$bien->getStatutId(),'</td>';
                            echo '<td>',$bien->getEauId(),'</td>';
                            echo '<td>',$bien->getChauffageId(),'</td>';
                            echo '<td>',$bien->getTypeBienId(),'</td>';
                            echo '<td>',$bien->getSuperficieBien(),'</td>';
                            echo '<td>',$bien->getSuperficieTerrain(),'</td>';
                            echo '<td>',$bien->getPrixHFAI(),'</td>';
                            echo '<td>',$bien->getNombrePieces(),'</td>';
                            echo '<td>',$bien->getNombreChambres(),'</td>';
                            echo '<td>',$bien->getRue(),'</td>';
                            echo '<td>',$bien->getLieuDit(),'</td>';
                            echo '<td>',$bien->getNumeroAppartement(),'</td>';
                            echo '<td>',$bien->getCodePostal(),'</td>';
                            echo '<td>',$bien->getVille(),'</td>';
                            echo '</tr>';
                }


// Fin du tableau et des cadres
echo '              </table>';
