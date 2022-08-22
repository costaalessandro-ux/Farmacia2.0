<!DOCTYPE html>
<html>
    <head>
             <meta charset="UTF-8">
        <title> Farmacia OnLine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href=""> 
    </head>
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
     <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Farmacia Online</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="selectInfos">Lista de Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gerador.html">Cadastro de Produtos</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="selectInfos">Lista de Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gerador.html">Cadastro de Vendas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <body> 
    <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <div class="container">
        <div class="text-center">
            <div class="mb-3">
                <form action="../../controller/produtos/alter.php" method="GET">
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