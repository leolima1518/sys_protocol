<?php

if (count($_POST) > 0) {
    // 1. pegar os valores do formulario
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // 2. conexao com o db

    
    try {
        include('conexao_db.php');

        $consulta = $conn->prepare("SELECT * FROM colab WHERE situacao='Ativo' AND email=:email AND senha=md5(:senha) ");
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
        $consulta->execute();

        $r = $consulta->fetchAll();
        $qtd_user = (count($r));
        if ($qtd_user == 1) {
            session_start();
            $_SESSION["email_usuario"] = $email;
            $_SESSION["nome_usuario"] = $r[0]["nome"];
            $_SESSION["id_usuario"] = $r[0]["id_colab"];
            header("Location: pagina_inicial.php");
            
        } else if ($qtd_user == 0) {
            $resultado["msg"] =  "Acesso Inválido";
            $resultado["cod"] = 0;
            
        }
        
    }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    
    }
    $conn = null;

    // 3. validacao com o db
}
include("index.php");

    
?>