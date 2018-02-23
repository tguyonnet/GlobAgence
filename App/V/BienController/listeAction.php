<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/02/18
 * Time: 15:49
 */
echo '<div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> '.$this->title.'</div>
        <div class="card-body">
          <div class="table-responsive">';
echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
echo '      <thead><tr><th>Formulaire d\'ajout de bien</th></tr></thead><tboby>';
// Contenu du formulaire
echo '<form method="POST" action=>';
echo '<p>Superficie du bien<input type="text" name="superficieBien"/></p>';
echo '<p>Superficie du terrain<input type="text" name="superficieTerrain"/></p>';
echo '<p>Prix<input type="text" name="prix"/></p>';
echo '<p>Photos<input type="file" name="image[1]"/></p>';
echo '<input type="file" name="image[2]">';
echo '<input type="file" name="image[3]">';
echo '<input type="file" name="image[4]">';
echo '<p>Nombre de pièces<input type="text" name="nbPieces"/><p>';
echo '<p>';
echo '</tr>';
