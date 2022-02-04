<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
    input[type=text], select {
  width: 100%;
  padding: 0.375rem 0.75rem;
  margin: 0rem;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  box-sizing: border-box;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous";>
</head>
<body>
    <br>
<div class="container">
    <h2>Cadastro de colaboradores</h2>
    
    <form action="form_colab.php" method="POST">
    <br>
        <div class="row">
            <div class="col-sm-8">
                <label for="nome">Nome:</label>
                <input type="text" required class="form-control" name="id_user" id="id_user" placeholder="Digite o nome.">
            </div>
            <div class="col-sm-4">
                <label for="nascimento">Data de nascimento:</label>
                <input type="text" required class="form-control" name="nascimento" id="nascimento" placeholder="ex. 01/01/2022.">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required class="form-control" name="email" id="email" placeholder="Digite seu email.">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" required class="form-control" name="senha" id="senha" placeholder="Digite sua senha de 8 ou mais digitos.">
        </div>
        <div class="row">
            <div class="col">
                <label for="cpf">CPF:</label>
                <input type="text" required class="form-control" name="cpf" id="cpf" placeholder="ex. 12345678910">
            </div>
            <div class="col">
                <label for="celular">Celular:</label>
                <input type="text" required class="form-control" name="celular" id="celular" placeholder="ex. 51 999999999">
            </div>
        </div>  
        <div>
            <label for="sexo">Sexualidade</label>
            <select id="sexo" name="sexo" required>

            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="não informado">Não Informado</option>
        </select>
        </div>
        <div class="row">
            <div class="col">
                <label for="cidade">Cidade:</label>
                <input type="text" required class="form-control" name="cidade" id="cidade" placeholder="Cidade">
            </div>
            <div class="col">
                <label for="bairro">Bairro:</label>
                <input type="text" required class="form-control" name="bairro" id="bairro" placeholder="Bairro">
            </div>
        </div> 
        <div>
        <div class="row g-3">
            <div class="col-sm-7">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" required class="form-control" name="rua" id="rua">
            </div>
            <div class="col-sm-2">
                <label for="numero" class="form-label">Numero</label>
                <input type="text" required class="form-control" name="numero" id="numero">
            </div>
            <div class="col-sm-3">
                <label for="complemento" class="form-label">Comple.</label>
                <input type="text" class="form-control" name="complemento" id="complemento">
            </div>
        </div>
        <br>

        <input type="submit" id="submeter" value="Cadastrar" class='btn btn-primary' >
    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>