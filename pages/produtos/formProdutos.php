<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Farmacia OnLine</title>
    </head>
    
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
