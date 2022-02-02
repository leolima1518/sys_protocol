<?php
    // 1. pegar os valores do formulario
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // 2. conexao com o db
    $servername = "localhost";
    $username = "root";
    $password = "81855688lima";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=sistema_test", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo "Connected successfully";
        $stmt = $conn->prepare("SELECT id_user FROM user WHERE email=:email AND senha=md5(:senha)");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->fetchAll();
        $qtd_user = (count($result));
        if ($qtd_user == 1) {
            echo "Acesso permitido!";
        } else if ($qtd_user == 0) {
            echo "***Acesso negado!***";
        }
    }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    // 3. validacao com o db
    
?>