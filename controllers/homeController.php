<?php
class homeController extends controller{
    public function index(){
        $clientes = new clientes();
        $viewDados = $clientes->getTodos();
        

    $this->loadTemplate('home', $viewDados);

    }
    public function filtrar(){
        if (isset($_GET['buscar'])) {
            $buscarNome = $_GET['buscar'];
        }
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
        }
        $filtro = new clientes();
        $viewDados = $filtro->getFiltro($buscarNome, $status);
        
        $this->loadTemplate('home', $viewDados);
    }
    
}