<?php

    if (count($_POST) > 0) {            
            $cpf = $_POST['cpf']; print_r($cpf);
;        
        try {
            include('conexao_db.php');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $conn->prepare("SELECT * FROM pessoa WHERE cpf=cpf");
            $consulta->execute();

            //$r= $conn->fetchAll();
            print_r(count($consulta));
            //$sql = "INSERT INTO protocolo (nome, nascimento, cpf, celular, sexo, cidade, bairro, rua, numero, complemento);
                    //VALUES ('$nome',$nascimento,$cpf,$celular,'$sexo','$cidade','$bairro','$rua',$numero,'$complemento')";
            
            //$conn->execute($nome,$nascimento,$cpf,$celular,$sexo,$cidade,$bairro,$rua,$numero,$complemento);
            //$conn->exec($sql);
            //$last_id = $conn->lastInsertId();


            $resultado["msg"] = "Cadastro concluido com sucesso.";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";         
        }        
        catch(PDOException $e) {echo $consulta ; 
            $resultado["msg"] = "Erro no Cadastro.";
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        }       
        $conn = null;
    }   
    include("protocolo.php");

?>