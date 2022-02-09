<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous";>
</head>
<body>
    <br>
  
    <div class="container">
    <h2>Cadastro Civil</h2>
        <form name= "formulario" action="cad_colab.php" method=POST>

            <br>
            <div class="row">
                <div class="col-sm-8">
                    <label for="nome">Nome:</label>
                    <input type="text" required class="form-control" name="nome" id="nome" placeholder="Digite o nome.">
                </div>
                <div class="col-sm-4">
                    <label for="nascimento">Data de nascimento:</label>
                    <input type="date" required class="form-control" name="nascimento" id="nascimento">
                </div>
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" required class="form-control" name="email" id="email" placeholder="Digite seu email.">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" required class="form-control" name="senha" id="senha" placeholder="Digite sua senha de 8 ou mais digitos.">
            <div class="from-group">
                <label for="cpf">CPF:</label>
                <input type="number" required class="form-control" name="cpf" id="cpf" placeholder="ex. 12345678910">
            </div>
            <div class="from-group">
                <label for="celular">Celular:</label>
                <input type="number" required class="form-control" name="celular" id="celular" placeholder="ex. 51 999999999">
            </div>  
            <div>
                <label for="sexo">Sexualidade</label>
                <select name="sexo" id="sexo"  class="form-control" required placeholder="Selecione">
                <option value='Masculino'>Masculino</option>
                <option value='Feminino'>Feminino</option>
                <option value='Nao_Informado'>Não Informado</option>
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
            <div class="row g-3">
                <div class="col-sm-7">
                    <label for="rua">Rua</label>
                    <input type="text" required class="form-control" name="rua" id="rua">
                </div>
                <div class="col-sm-2">
                    <label for="numero">Numero</label>
                    <input type="number" required class="form-control" name="numero" id="numero">
                </div>
                <div class="col-sm-3">
                    <label for="complemento">Comple.</label>
                    <input type="text" class="form-control" name="complemento" id="complemento">
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Cadastrar</button> 
            
            <a href="\sys_protocol\form_colab.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Limpar</a>
            
           
            <a href="\sys_protocol\pagina_inicial.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Voltar</a>
            <br>
            
            <?php if(isset($resultado) ): ?>
                <div class= "alert <?= $resultado["style"] ?>">
                    <?php echo $resultado["msg"]; ?>

                </div>
            <?php endif; ?>
        </form>
        <br><br><br>
        <h4>Colaboradores Colaboradores</h4>
        <?php ?>

            <?php include("consulta_colab.php");?>

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($colab as $p): ?>
                <tr>
                    <td><?= $p["id_colab"];?></td>
                    <td><?= $p["nome"];?></td>
                    <td><?= $p["email"];?></td>
                    <td><?= $p["cpf"];?></td>
                    <td><?= $p["situacao"];?></td>
                    <td>
                        <button class="btn btn-outline-warning btn-sm">Alterar</button>
                        <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Remover <?=$p['nome'];?>?');" href="remov_colab.php?id_colab=<?=$p['id_colab']?>">Remover</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                

            </table>

    </div>
    <br><br><br><br><br><br><br><br>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>