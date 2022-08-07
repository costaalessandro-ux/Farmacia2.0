<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head
    <?php
    include_once '../../dao/conexao.php';
    require '../../model/Produtos.php';
    $idProd = $_GET['idProd'];
    $stringSelecionarAlter = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto where idProd = $idProd ; ";
    $query = conexao::conexao()->query($stringSelecionarAlter);
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $idProd = $row["idProd"];
                $nomeProd = $row["nomeProd"];
                $quantidadeProd = $row["quantidadeProd"];
                $preco = $row["preco"];
                $descricao = $row["descricao"];  
      }
    ?>

    <body> 
    <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <div class="container">
        <div class="text-center">
            <div class="mb-3">
                <form action="./controller/alter.php" method="GET">
                    <input type="hidden" name="idprod" value="<?php echo $idProd;?>">   
                    
                    <div class="lado1">
                        NOME DO PRODUTO: 
                        <p><input type="text" name="nomeprod" id="nomeprod" value="<?php echo $nomeProd;  ?>" placeholder="NOME"></p>
                        QUANTIDADE: 
                        <p><input type="number" name="quantidadeprod" id="quantidadeprod" value="<?php echo $quantidadeProd;?>" placeholder="QUANTIDADE"></p>
                    </div>
                    <div class="lado2">
                        VALOR UNITARIO: 
                        <p><input type="number" name="preco" id="preco" step="0.010" value="<?php echo $preco; ?>" placeholder="VALOR UNITARIO"></p>
                        DESCRICAO: 
                        <p><input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>" placeholder="DESCRICAO"></p>
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