<?php 
class cadastrarController  extends controller
{
    public function index() {
        
        $this->loadTemplate('cadastrar');

    }
    public function inserirCad(){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $tel = $_GET['tel'];
        $clientes = new clientes();
        
        if($clientes->inserirCadastro($nome, $idade,$tel)){
            //     header("Location: " . BASE_URL);
            $teste = "144444";
            return $teste;
        }else{
            $teste ="1131";
            return $teste;
            // header("Location: " . BASE_URL.'cadastrar?existenome=sim');
        }

        


    }
}
