<?php

if (count($_POST) > 0) {
    // 1. pegar os valores do formulario
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // 2. conexao com o db

    
    try {
        include('conexao_db.php');

        $sql = " INSERT INTO pessoa (cpf, nome
        
        ";
        $consulta->execute();

        $result = $consulta->fetchAll();
        $qtd_user = (count($result));
        if ($qtd_user == 1) {

            $resultado["msg"] = "Acesso permitido.";
            $resultado["cod"] = 1;
        } else if ($qtd_user == 0) {
            $resultado["msg"] =  "***Acesso Inválido***";
            $resultado["cod"] = 0;
        }
        
    }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    // 3. validacao com o db
}

?>