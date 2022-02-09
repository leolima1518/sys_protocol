<?php

    if (count($_GET) > 0) {            
            $id_colab = $_GET['id_colab'];
        try {
            include('conexao_db.php');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE colab SET situacao = 'Não_Ativo' WHERE id_colab = $id_colab ";     
            //$conn->execute($nome,$nascimento,$cpf,$celular,$sexo,$cidade,$bairro,$rua,$numero,$complemento);
            $conn->exec($sql);

            $resultado["msg"] = "Cadastro removido com sucesso.";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";         
        }        
        catch(PDOException $e) {echo $sql;
            $resultado["msg"] = "Erro no Cadastro.";
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        }       
        
    }


    $conn = null;
    include("form_colab.php");

?>