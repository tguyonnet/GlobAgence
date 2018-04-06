<?php

// Ici on est dans la classe View, ce morceau de code vient donc s'inclure à l'intérieur de la méthode display() de la classe View



// Une ligne pour contenir les carte de messages
echo '<div class="row">';

// Première carte de message
echo '<!-- Comtenu du tableau-->
          <!--div class="container"-->
          <div class="card card-login mx-auto mt-2">
          <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
          <div class="card-body" style="text-align: center;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead><tr><th>Photo du bien</th><th>Code de charge</th><th>Code de statut</th><th>Code d\'eau</th><th>Code de chauffage</th><th>Code de type de bien</th>
                        <th>Superficie du bien</th><th>Superficie du terrain</th><th>Nombre de pièces</th><th>Nombre de chambre</th><th>Rue</th>
                        <th>Lieu dit</th><th>Numéro</th><th>Code postal</th><th>Ville</th></tr></thead>';

foreach($this->biens as $bien){

    echo '<tr>';
    /*echo '<td>',$bien->getCodeCharge(),//'</td>';
    echo '<td>',$bien->getCodeStatut(),'</td>';
    echo '<td>',$bien->getCodeEau(),'</td>';
    echo '<td>',$bien->getCodeChauffage(),'</td>';
    echo '<td>',$bien->getCodeTypeBien(),'</td>';
    echo '<td>',$bien->getSuperficieBien(),'</td>';
    echo '<td>',$bien->getSuperficieTerrain(),'</td>';
    echo '<td>',$bien->getNombreDePiece(),'</td>';
    echo '<td>',$bien->getNombreDeChambre(),'</td>';
    echo '<td>',$bien->getRue(),'</td>';
    echo '<td>',$bien->getLieuDit(),'</td>';
    echo '<td>',$bien->getNumeroAppartement(),'</td>';
    echo '<td>',$bien->getCodePostal(),'</td>';
    echo '<td>',$bien->getVille(),'</td>';*/
    echo '</tr>';
}
// Fin du tableau et des cadres
echo '    
                </table>
           </div>
           </div>';
/*
// Première carte de message
echo '  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">'.$this->ligues->count().' ligues inscrites à M2L</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>';
*///
// Fin de la ligne
echo '</div>';

// Une colonne 
echo '<div class="card-columns">';

// Exemple de contenu blog dans la colonne
echo '<!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
              <div class="w3-container">
                <img class="card-img-top img-fluid w-100" src="https://picsum.photos/200/150/?random" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                <p class="card-text small">These waves are looking pretty good today!
                  <a href="#">#surfsup</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                    <div class="media mt-3">
                      <a class="d-flex pr-3" href="#">
                        <img src="http://placehold.it/45x45" alt="">
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#">Like</a>
                          </li>
                          <li class="list-inline-item">·</li>
                          <li class="list-inline-item">
                            <a href="#">Reply</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 32 mins ago</div>';

// Fin de la colonne
echo '</div>';