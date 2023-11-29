<?php

class clientes extends model
{
    public function getTodos(){
        $sql = "SELECT * FROM clientes";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        if (isset($row)) {
            return $row;
        }else{
            return $row = array();
        }
        
        
    }
    public function getFiltro($nomeBuscado, $status) {
        $nome = $nomeBuscado;
        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$nome%' ";
        if ($status != "") {
            $sql .= "AND `status` = '$status'";
        }

        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $row = [];
        }
        return $row;
    }

    public function inserirCadastro($nome, $idade, $tel) {
        if ($this->nomeExiste($nome) == false) {
     
        $nome = $nome;
        $idade = $idade;
        $tel = $tel;

        $sql = "INSERT INTO clientes (`nome`, `idade`, `tel`) VALUE (:nome, :idade, :tel) ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':tel', $tel);
        $sql->execute();

            
            return true;
        }else{
            return false;
        }      
    }
    private function nomeExiste($nome) {
        $sql = "SELECT * FROM clientes WHERE nome = :nome";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function excluirCad($id){
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function alterarStatus($id){
        $alterarStatus = $this->statusAtual($id);
        echo $alterarStatus;
        $sql = "UPDATE `clientes` SET `status` = :alterandostatus WHERE `id` = :id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':alterandostatus', $alterarStatus);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
             return false;
        }
    }
    private function statusAtual($id){
        $sql = "SELECT `status` FROM clientes WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($resultado['status'] == "Ativo") {
            $inativo = 'Inativo';
            return $inativo;
        }else{
            $Ativo = 'Ativo';
            return $Ativo;
        }
    }
    public function alterarCad($id, $nome, $idade, $tel)
    {
        $sql = "UPDATE `clientes` SET `nome`= :nome ,`idade`= :idade,`tel`= :tel WHERE `id` = :id ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':tel', $tel);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function buscarCad($id){
        $sql = "SELECT * FROM `clientes` WHERE id = :id ";
        $smtp = $this->db->prepare($sql);
        $smtp->bindParam(':id', $id);
        $smtp->execute();
        $resultado = $smtp->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
}