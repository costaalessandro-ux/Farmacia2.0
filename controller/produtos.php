<!DOCTYPE html>
 <?php
        //require '../model/Produtos.php';
        require '../dao/ProdutosDAO.php';
     
        $prodDao = new ProdutosDAO();
        $prodDao->insert(); 
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        </br>
        <a href="../index.php">Voltar </a>
    </body>
</html>
