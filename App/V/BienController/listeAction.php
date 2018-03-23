<?php



// Contenu du tableau
echo '<div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
      <div class="card-body" style="text-align: center;">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead><tr><th>Superficie du bien</th><th>Superficie du terrain</th><th>Nombre de pièces</th><th>Nombre de chambre</th>
            <th>Rue</th><th>Lieu dit</th><th>Numéro</th><th>Code postal</th><th>Ville</th></tr></thead><tboby>';
                foreach($this->biens as $bien){
                    echo'
                    <div class="form-group">
                        <tr>;
                             <td>,$bien->getSuperficieBien(),</td>;
                             <td>,$bien->getSuperficieTerrain(),</td>;
                             <td>,$bien->getNombreDePiece(),</td>;
                             <td>,$bien->getNombreDeChambre(),</td>;
                             <td>,$bien->getRue(),</td>;
                             <td>,$bien->getLieuDit(),</td>;
                             <td>,$bien->getNumeroAppartement(),</td>;
                             <td>,$bien->getCodePostal(),</td>;
                             <td>,$bien->getVille(),</td>;
                        </tr>;
                    </div>';
                }
               
echo' </div>
       </div>
       </div>';



// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';