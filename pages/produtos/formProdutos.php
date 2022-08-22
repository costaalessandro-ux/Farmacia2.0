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
        <div class="container">
            <div class="text-center">
                <div class="mb-3">
                    <form action="../../controller/produtos/produtos.php" method="POST">
                        <p><input type="hidden" name="idprod" id="idprod" ></p>
                        <div class="lado1">
                            NOME DO PRODUTO: 
                            <p><input type="text" name="nomeprod" id="nomeprod" ></p>
                            QUANTIDADE: 
                            <p><input type="number" name="quantidadeprod" id="quantidadeprod"></p>
                        </div>
                        <div class="lado2">  
                            VALOR UNITARIO: 
                            <p><input type="number" name="preco" id="preco" step="0.010" ></p>
                            DESCRIÇÃO DO PRODUTO: 
                            <p><input type="text" name="descricao" id="descricao" ></p>
                        </div>
                        <div class="botoes">
                            <input type="submit" name="enviar" id="enviar" value="ENVIAR"> <input type="reset" name="reset" id="reset" value="REDEFINIR">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
        <span> <a href="../../controller/produtos/select.php"> Lista de Produtos </a><p>
              <a href="../../index.php">Voltar </a>
            </p>
    </body>
    
      <?php
     
     ?>
</html>
