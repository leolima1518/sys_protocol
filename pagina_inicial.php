<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous";>
</head>
<body>
    <div class="container"> <br><br> 
    <div>
        <div class="card-group">
            <div class="card" style="width: 18rem;">
                <img src="\sys_protocol\img\pessoa.png" class="card-img-top" alt="Imagem de Pessoas">
                <div class="card-body">
                <a href="\sys_protocol\form_pessoa.php" class="btn btn-primary">Cadastro de Pessoas</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="\sys_protocol\img\ti.png" class="card-img-top" alt="Imagem pessoal do ti">
                <div class="card-body">
                <a href="\sys_protocol\form_colab.php" class="btn btn-primary">Cadastro de Colaboradores</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="\sys_protocol\img\protocolo.png" class="card-img-top" alt="Imagem de protocolo">
                <div class="card-body">
                <a href="protocolo.php" class="btn btn-primary">Cadastro de Protocolos</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="\sys_protocol\img\consulta.png" class="card-img-top" alt="Imagem de consulta">
                <div class="card-body">
                <a href="consulta.php" class="btn btn-primary">Consulta de Protocolos</a>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>