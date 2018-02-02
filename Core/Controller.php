<?php

namespace Core;

class Controller {

    static protected $_view;

    static public function setView(View $view) {
        return self::$_view = $view;
    }

    static public function getView(){
        return self::$_view ;
    }
    static public function redirect($controllerName, $actionName, $params=[]) {
        $view = new \Core\View($controllerName, $actionName);

        $controllerName::setView($view);

        $controllerName::$actionName($params);
    }

}
