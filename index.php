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
        <span> <a href="./pages/vendas/formVendas.php"> Cadastro de Vendas </a> </span><br>
        <span> <a href="./pages/produtos/formProdutos.php"> Cadastro de Produtos </a> </span><br>
        <span> <a href="./controller/produtos/select.php"> Lista de Produtos </a> </span><br>
         <span> <a href="./controller/vendas/selectVendas.php"> Lista de Vendas </a> </span>
    </body>
    
     <?php
     
     ?>
</html>
