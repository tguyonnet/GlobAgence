<?php

// Voir un max d'érreurs à l'écran pour le debug
error_reporting(E_ALL);

// On se place dans le répertoire racine du projet
chdir(__DIR__);

// Inclusion automatique des fichiers de classes des que le compilateur PHP en voit une dans le code ci-dessous
function __autoload($class){
    $fichier=__DIR__.'/'.str_replace('\\','/',$class).".php";
    if(file_exists($fichier)){
        include($fichier);
    }else{
        var_dump(getcwd());
        var_dump($fichier);
    }
}

// Chargement du controlleur avec les paramètres du POST et ceux du GET
$controllerName = '\\App\\C\\'.\Core\Params::post('c',  \Core\Params::get('c','DashBoard')).'Controller';
//var_dump($controllerName);

$actionName=  \Core\Params::post('a',  \Core\Params::get('a','liste')).'Action';
//var_dump($actionName);
//
// Prépare la connexion à la bdd
//$connection = \Core\Connection::setup('connection','mysql:host='.BDD_HOST.';dbname='.BDD_NAME, BDD_USER, BDD_PASSWORD, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$connection = \Core\Connection::setup('connection','mysql:host=localhost;dbname=m2l_v3', \Core\Config::BDD_USER, \Core\Config::BDD_PASSWORD, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
\Core\Object::setConnection($connection);

// On fait appel au controlleur sélectionné avec les paramètres du POST et GET mis dans un seul tableau (array_merge)
\Core\Controller::redirect($controllerName, $actionName,  array_merge(\Core\Params::post(),\Core\Params::get()));

// On affiche la vue que le controlleur a construit
\Core\Controller::getView()->display();


