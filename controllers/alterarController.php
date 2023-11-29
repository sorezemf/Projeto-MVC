<?php 
class alterarController extends controller
{
    public function buscaCad($id){
        $clientes = new Clientes();
        $resultado = $clientes->buscarCad($id);
        $json_resultado = json_encode($resultado);
        echo $json_resultado;
    }
    public function alterarCad($id) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $tel = $_GET['tel'];
        $json_resultado = json_encode($idade);
        echo $json_resultado;
        $clientes = new clientes();
        $clientes->alterarCad($id, $nome, $idade, $tel);
        
    }

}