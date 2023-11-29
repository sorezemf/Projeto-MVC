<?php
class controller{
    public function loadTemplate($viewName, $viewData = array()) {
        
        require 'views/template.php';
    }
    public function loadInTemplate($viewName, $viewData = array()){
        
        
        require 'views/' . $viewName . '.php';
    }

}