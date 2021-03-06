<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Protocolos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous";>
</head>
<body>
    
<div class="container"> <br>
    <h4>Cadastro de Protocolos</h4>
    <form name= "protocolo" action="cad_protocolo.php" method=POST>
    <div class="row">
        <div class="col-sm-6">
            <label for="cpf"></label>
            <input type="text" required class="form-control" name="cpf" id="cpf" placeholder="Insira o seu CPF.">
        </div>
        <div class="col-sm-6">
            <label for="prazo">Prazo</label>
            <input type="date" required class="form-control" name="prazo" id="prazo" placeholder="Digite o numero do protocolo.">
        </div>
    
        
        <text class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" type="text" required name="descricao" id="descricao" rows="10"></textarea>
        </div>   
        
        <br>
    <button type="submit" class="btn btn-primary">Cadastrar</button> 
    <a href="\sys_protocol\protocolo.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Limpar</a>
    <a href="\sys_protocol\pagina_inicial.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Voltar</a> 


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>