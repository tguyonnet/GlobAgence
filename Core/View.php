<?php

namespace Core;

class View{
    private $_file;
    
    public function __construct($controller,$action){
        $file =implode('/',array_slice(explode('\\',$controller),3)).'/'.$action;
        $this->setFile($file);
    }
    
    public function setFile($file){
        $this->_file = 'App/V/'.$file.'.php';
        return $this;
    }
    
    public function display(){
        $fichier=getcwd().'/'.$this->_file;
        include('App/V/_helper/header-sb-admin.php');
        include($fichier);
        include('App/V/_helper/footer-sb-admin.php');
    }
}