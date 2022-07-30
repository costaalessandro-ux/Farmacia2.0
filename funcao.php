<?php
require_once './dao/conexao.php';
$con = conexao::conexao();

function le($con, $idProd) {
    $row = array();
    try {
        $query = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao where idProd = idProd;";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":idProd", $idProd, PDO::PARAM_INT);
        $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

?>

 