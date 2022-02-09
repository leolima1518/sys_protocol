<?php
    
    try{
        include('conexao_db.php');
        $consulta = $conn->prepare("SELECT * FROM colab WHERE situacao = 'Ativo'");
        $consulta->execute();
        $colab = $consulta->fetchAll();
    }catch(PDOException $e) {
        $resultado["msg"] = "Erro no banco de dados.";
        $resultado["cod"] = 0;
        $resultado["style"] = "alert-danger";

    }
    $conn = null;