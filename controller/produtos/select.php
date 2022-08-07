
        <?php
         //require '../model/Produtos.php';
         require_once '../../dao/ProdutosDAO.php';
         //$prod = new Produtos();
         $prodDao = new ProdutosDAO();
         $prodDao->select();
        ?>

