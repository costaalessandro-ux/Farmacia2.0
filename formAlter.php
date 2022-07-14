<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //require_once './dao/conexao.php';
        //require_once './dao/ProdutosDAO.php';
        $idprod = $_GET['idProd'];
        
        ?>
         <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <div class="container">
        <div class="text-center">
            <div class="mb-3">
                <form action="./controller/alter.php" method="GET">

                    <input type="hidden" name="idprod" value="<?php echo $linha["idprod"]; ?>">

                    <div class="lado1">
                        NOME DO PRODUTO: 
                        <p><input type="text" name="nomeprod" id="nomeprod" value="<?php echo $linha["nomeprod"]; ?>" placeholder="NOME"></p>
                        QUANTIDADE: 
                        <p><input type="number" name="quantidadeprod" id="quantidadeprod" value="<?php echo $linha["quantidadeprod"]; ?>" placeholder="QUANTIDADE"></p>
                    </div>
                    <div class="lado2">
                        VALOR UNITARIO: 
                        <p><input type="number" name="preco" id="preco" step="0.010" value="<?php echo $linha["preco"]; ?>" placeholder="VALOR UNITARIO"></p>
                        DESCRICAO: 
                        <p><input type="text" name="descricao" id="descricao" value="<?php echo $linha["descricao"]; ?>" placeholder="DESCRICAO"></p>
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
        <a href="selectProduto.php"><img src="../../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
    </div>
    </body>
</html>
