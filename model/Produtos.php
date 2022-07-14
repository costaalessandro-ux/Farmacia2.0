<?php

class Produtos {
     
    private $idProd;
    private $nomeProd;
    private $quantidadeProd;
    private $preco;
    private $descricao;
    
    /*
    public function __construct($idProd,$nomeProd,$quantidadeProd,$preco,$descricao) {
        $this->idProd = $idProd;
        $this->nomeProd = $nomeProd;
        $this->quantidadeProd = $quantidadeProd;
        $this->preco = $preco;
        $this->descricao = $descricao;
    } 
    */
    
    
    public function Produtos() {
        $this->idProd = $idProd;
        $this->nomeProd = $nomeProd;
        $this->quantidadeProd = $quantidadeProd;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }
    
     

    public function getIdProd() {
        return $this->idProd;
    }

    public function setIdProd($idProd): void {
        $this->idProd = $idProd;
    }

    public function getNomeProd() {
        return $this->nomeProd;
    }

    public function setNomeProd($nomeProd): void {
        $this->nomeProd = $nomeProd;
    }

    public function getQuantidadeProd() {
        return $this->quantidadeProd;
    }

    public function setQuantidadeProd($quantidadeProd): void {
        $this->quantidadeProd = $quantidadeProd;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco): void {
        $this->preco = $preco;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

}

