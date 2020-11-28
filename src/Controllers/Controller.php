<?php

namespace App\Controllers;

class Controller{
    public static function render($viewName){
        $viewPath = str_replace('_','/',$viewName);
        require('../Views/'.$viewPath.'.php');
    }
}