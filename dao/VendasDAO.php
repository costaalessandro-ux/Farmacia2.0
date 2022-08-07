<?php
require 'conexao.php';
require '../model/Produtos.php';

class VendasDAO {
    
   public function insert(){
       $this->nome = $_POST['nome'];
       $this->telefone = $_POST['telefone'];
       $this->hora = $_POST['hora'];
       $this->codigo = $_POST['codigo'];
       $this->quantidade = $_POST['quantidade'];
       $this->valorpago = $_POST['valorpago'];
       
       try {
            $stringSalvar = " INSERT INTO vendas(nome, telefone, hora, codigo, quantidade, valorpago) VALUES ('" . $this->nome . "' , '" . $this->telefone. "' , '" . $this->hora. "' , '" . $this->codigo . "', '" . $this->quantidade. "' , '" . $this->valorpago. "') ";
            conexao::conexao()->query($stringSalvar);
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        return $stringSalvar;
   }
   
   public function select() {
       
   }
   
   
}
