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
    
    <div class="container"> <br><br>
        <h4>Consulta de Protocolos</h4>
    <div class="row">
        <div class="col-sm-5">
            <label for="id_protocolo">Numero do Protocolo:</label>
            <input type="text" required class="form-control" name="id_protocolo" id="id_protocolo" placeholder="Digite o numero do protocolo.">
        </div>
        <div class="col-sm-5">
            <label for="cpf">Consulta por CPF</label>
            <input type="test" required class="form-control" name="cpf" id="cpf" placeholder="Digite o seu CPF.">
        </div>
    </div> <br>
    <button type="submit" class="btn btn-primary">Consultar</button> 
            
            <a href="\sys_protocol\consulta.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Limpar</a>
            
           
            <a href="\sys_protocol\pagina_inicial.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Voltar</a> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>