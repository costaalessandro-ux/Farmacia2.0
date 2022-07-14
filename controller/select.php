
        <?php
         //require '../model/Produtos.php';
         require '../dao/ProdutosDAO.php';
         //$prod = new Produtos();
         $prodDao = new ProdutosDAO();
         $prodDao->select();
        ?>

