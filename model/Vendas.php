<?php

class Vendas {

    private $id, $nome, $telefone, $dataVenda, $hora,
            $codigo, $quantidade, $valorPago;

    public function __construct($id, $nome, $telefone, $dataVenda, $hora,
            $codigo, $quantidade, $valorPago) {

        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->dataVenda = $dataVenda;
        $this->hora = $hora;
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
        $this->valorPago = $valorPago;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getDataVenda() {
        return $this->dataVenda;
    }

    public function setDataVenda($dataVenda) {
        $this->dataVenda = $dataVenda;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getValorPago() {
        return $this->valorPago = $this->valorPago;
    }

    public function setValorPago($valorPago) {
        $this->valorPago = $valorPago;
    }

}
