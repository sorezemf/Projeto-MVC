<?php
class excluirController extends controller
{
    public function excluirCad() {
        $id = $_GET['id'];
        $clientes = new clientes();
        if ($clientes->excluirCad($id)) {
            echo "Nome Excluido";
            
        }else{
            echo "Houve algum problema, tente novamente";

        }
    }
}