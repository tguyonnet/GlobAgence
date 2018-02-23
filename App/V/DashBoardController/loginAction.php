<?php


// Ici on est dans la classe View, ce morceau de code vient donc s'inclure à l'intérieur de la méthode display() de la classe View


//Display login form
echo '<!-- Breadcrumbs-->
      <div class="container">
      <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center text-white bg-dark">Formulaire de Connexion</div>
      <div class="card-body">
        <form >
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group text-center">
          <input class="btn btn-dark" type="submit" value="Se connecter">
          <a class="btn btn-info" href="register.html">Mot de passe oublié ?</a>
        </div>
        </form>
       
      </div>
      </div>
    </div>';


$timeTarget = 0.05; // 50 millisecondes

$cost = 8;
do {
    $cost++;
    $start = microtime(true);
    echo password_hash("pwsio", PASSWORD_BCRYPT, ["cost" => $cost]);
    $end = microtime(true);
} while (($end - $start) < $timeTarget);







