<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head
    <?php
    include_once './dao/conexao.php';
    require './model/Produtos.php';
    //require 'funcao.php';
    
    /*
    $con = conexao::conexao();
    $idProd = $_GET['idProd'];
    
    
    function le($con, $idProd) {
        $row = array();
        try {
            $query = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto where idProd = '. $idProd  .' ; ";
            $stmt = $con->prepare($query);
            $stmt->bindParam(":idProd", $idProd, PDO::PARAM_INT);
            $stmt->execute();
            if ($row === $stmt->fetch(PDO::FETCH_ASSOC)) {
                return $row;
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    $linha = le($con, $idProd);
     
     */
    
     $idProd = $_GET['idProd'];
    
    function le($idProd) {
        $row = array();
        try {
            $stringSelecionarAlter = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto where idProd = '. $idProd  .' ; ";
            $query = conexao::conexao()->query($stringSelecionarAlter);
            if ($row === $query->fetch(PDO::FETCH_ASSOC)) {
                return $row;
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    $linha = le($idProd);

    ?>

    <body> 
    <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <div class="container">
        <div class="text-center">
            <div class="mb-3">
                <form action="./controller/alter.php" method="GET">
                    <input type="hidden" name="idprod" value="<?php ?>">   
                    
                    <div class="lado1">
                        NOME DO PRODUTO: 
                        <p><input type="text" name="nomeprod" id="nomeprod" value="<?php echo $linha['nomeProd']; ?>" placeholder="NOME"></p>
                        QUANTIDADE: 
                        <p><input type="number" name="quantidadeprod" id="quantidadeprod" value="<?php ?>" placeholder="QUANTIDADE"></p>
                    </div>
                    <div class="lado2">
                        VALOR UNITARIO: 
                        <p><input type="number" name="preco" id="preco" step="0.010" value="<?php ?>" placeholder="VALOR UNITARIO"></p>
                        DESCRICAO: 
                        <p><input type="text" name="descricao" id="descricao" value="<?php ?>" placeholder="DESCRICAO"></p>
                    </div>
                    <div class="botoes">
                        <p><input type="submit" name="enviar" id="enviar" value="ENVIAR"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p>
    <div class="itens">
        <a href="controller/select.php"><img src="" alt="" width="100" height="50"></a>
    </div>
</body>
</html>