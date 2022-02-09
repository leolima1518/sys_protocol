<?php

    if (count($_POST) > 0) {            
            $nome = $_POST['nome'];
            $nascimento = $_POST['nascimento'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $cpf = $_POST['cpf'];
            $celular = $_POST['celular'];
            $sexo = $_POST['sexo'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];  

        try {
            include('conexao_db.php');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO colab (nome, nascimento, email, senha, cpf, celular,  sexo, cidade, bairro, rua, numero, complemento, data_inicial, situacao)
                    VALUES ('$nome','$nascimento','$email','$senha',$cpf,$celular,'$sexo','$cidade','$bairro','$rua',$numero,'$complemento',default, 1)";
            
            //$conn->execute($nome,$nascimento,$cpf,$celular,$sexo,$cidade,$bairro,$rua,$numero,$complemento);
            $conn->exec($sql);
            $consulta = $conn->prepare("SELECT * FROM colab");
            $consulta->execute();
            $result["colab"] = $consulta->fetchAll();
            $resultado["msg"] = "Cadastro concluido com sucesso.";
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