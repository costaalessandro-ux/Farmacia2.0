<?php

/*
require 'conexao.php';
require '../model/Produtos.php';
*/

require 'conexao.php';
require '../model/Produtos.php';


class ProdutosDAO {

    public function insert() {
        $this->idProd = $_POST['idprod'];
        $this->nomeProd = $_POST['nomeprod'];
        $this->quantidadeProd = $_POST['quantidadeprod'];
        $this->preco = $_POST['preco'];
        $this->descricao = $_POST['descricao'];
        try {
            $stringSalvar = " INSERT INTO produto(idProd, nomeProd, quantidadeProd, preco, descricao) VALUES ('" . $this->idProd . "' , '" . $this->nomeProd . "' , '" . $this->quantidadeProd . "' , '" . $this->preco . "' , '" . $this->descricao . "') ";
            conexao::conexao()->query($stringSalvar);
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        return $stringSalvar;
    }

    
    public function select() {
        try {
            $stringSelecionar = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto;";
            $query = conexao::conexao()->query($stringSelecionar);
            echo "<table class='table table-borderless'>";
            echo "<div class='tabela'>";
            echo "<tr>
                <th>id</th>
	        <th>Nome</th>
	        <th>Quantidade</th>
	        <th>Preco</th>
                <th>Descricao</th>
	        <th colspan=\"2\">Ações</th>
	        </tr>";

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->idProd = $row["idProd"];
                $this->nomeProd = $row["nomeProd"];
                $this->quantidadeProd = $row["quantidadeProd"];
                $this->preco = $row["preco"];
                $this->descricao = $row["descricao"];

                echo "<tr>";
                echo "<td>" . $this->idProd . "</td>";
                echo "<td>" . $this->nomeProd  . "</td>";
                echo "<td>" . $this->quantidadeProd . "</td>";
                echo "<td>" . $this->preco . "</td>";
                echo "<td>" . $this->descricao . "</td>";
                echo '<td><a href="../controller/produtos.php?idProd='. $row["idProd"] . '">Excluir</a></td>';
                echo '<td><a href="../formAlter.php?idProd='. $row["idProd"] . '">Alterar</a></td>';

                //echo '<td><a href="javascript:confirmaExclusao('.$row["idprod"].')"><img src="../../icones/file-excel.svg" alt="" width="15" height="30"></a></td>';
                //echo '<td><a href="javascript:confirmaAlteracao('.$row["idprod"].')">Alterar</a></td>';
                echo "</tr>";
            }
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        //return $stringSelecionar;
    }
    
    
   
    public function alter(){
        try{
            $stringSelecionarAlter = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto where idProd = . '$this->idProd;' ";
            conexao::conexao()->query($stringSelecionarAlter);
        } catch (Exception $ex) {

        }
    }
    
   
    
    public function delete(){
         try {
            $stringDelete = " DELETE from produto WHERE idProd = " .$this->idProd. " ";
            conexao::conexao()->query($stringDelete);
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        return $stringDelete;
    }
    

}
