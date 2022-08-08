<?php

require 'conexao.php';
require '../../model/Vendas.php';

class VendasDAO {

    public function insert() {
        $this->nome = $_POST['nome'];
        $this->telefone = $_POST['telefone'];
        $this->hora = $_POST['hora'];
        $this->codigo = $_POST['codigo'];
        $this->quantidade = $_POST['quantidade'];
        $this->valorpago = $_POST['valorpago'];

        try {
            $stringSalvar = " INSERT INTO vendas(nome, telefone, hora, codigo, quantidade, valorpago) VALUES ('" . $this->nome . "' , '" . $this->telefone . "' , '" . $this->hora . "' , '" . $this->codigo . "', '" . $this->quantidade . "' , '" . $this->valorpago . "') ";
            conexao::conexao()->query($stringSalvar);
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        return $stringSalvar;
    }

    public function select() {
        try {
            $stringSelecionar = "select v.idVenda, v.nome, v.telefone, v.quantidade, p.idProd, p.nomeProd, v.hora, v.valorpago, (v.quantidade * p.preco) as valortotal, (v.valorpago - (v.quantidade * p.preco)) as troco
            from vendas as v inner join produto as p on v.codigo = p.idProd;";
            $query = conexao::conexao()->query($stringSelecionar);
            echo "<table class='table table-borderless'>";
            echo "<div class='tabela'>";
            echo "<th scope='col'> Nome do Cliente </th>
			  <p><th> Telefone </th></p>
                          <th> Hora da Compra </th>
                          <th> Nome do Remedio </th>
                          <th> Quantidade </th>
                          <th> Valor Total </th>
                          <th> Valor Pago </th>
                          <th> Troco </th>
			</tr>";

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->idVenda = $row['idVenda'];
                $this->nome = $row['nome'];
                $this->telefone = $row['telefone'];
                $this->hora = $row['hora'];
                $this->nomeProd = $row["nomeProd"];
                $this->quantidade = $row['quantidade'];
                $valorTot = $row["valortotal"];
                $this->valorpago = $row['valorpago'];
                $valorTroco = $row["troco"];

                echo "<tr>";
                echo "<td> $this->nome </td>";
                echo "<td> $this->telefone </td>";

                echo "<td> $this->hora </td>";
                echo "<td> $this->nomeProd </td>";
                echo "<td> $this->quantidade </td>";
                echo "<td> $valorTot </td>";
                echo "<td> $this->valorpago </td>";
                echo "<td> $valorTroco </td>";

                echo '<td><a href="../controller/produtos.php?idProd=' . $row["idVenda"] . '">Excluir</a></td>';
                echo '<td><a href="../../formAlter.php?idProd=' . $row["idVenda"] . '">Alterar</a></td>';

                //echo '<td><a href="javascript:confirmaExclusao('.$row["idprod"].')"><img src="../../icones/file-excel.svg" alt="" width="15" height="30"></a></td>';
                //echo '<td><a href="javascript:confirmaAlteracao('.$row["idprod"].')">Alterar</a></td>';
                echo "</tr>";
            }
        } catch (Exception $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        //return $stringSelecionar;
    }

}
