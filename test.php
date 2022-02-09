<?php


try {
  include('conexao_db.php');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user (nome, email, senha, data, situacao)
  VALUES ('John', 'john@example.com', '12343543', default, 1)";
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


<?php

    if (count($_POST) > 0) {            
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);     
        try {
            include('conexao_db.php');
            var_dump($dados);
            $sql = "INSERT INTO usuario ('nome','nascimento','cpf','celular','sexo','cidade','bairro','rua','numero','complemento')
                    VALUES ('". $dados ['nome'] . "','". $dados ['nascimento'] . "','". $dados ['cpf'] . "','". $dados ['celular'] . "','". $dados ['sexo'] . "','". $dados ['cidade'] . "','". $dados ['bairro'] . "','". $dados ['rua'] . "','". $dados ['numero'] . "','". $dados ['complemento'] . "')";
            $sqlinsert = $conn->prepare($sql);
            $sqlinsert->execute();

            $resultado["msg"] = "Acesso permitido.";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";    
        }        
        catch(PDOException $e) {print_r($sqlinsert);
            $resultado["msg"] = "Erro no Cadastro.";
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        }       
        $conn = null;
    }   
    include("form_pessoa.php");

?>