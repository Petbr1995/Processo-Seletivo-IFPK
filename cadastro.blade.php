<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="cadastro.css">
    </head>
<body>
    <form id="cadastro" name="f_cad" method="post" action="vendas.php"> 
    <h1>Cadastro </h1>

    <label for="username">Nome Cliente:</label><br>
    <input type="text" id="username" name="username"><br>

    <label for="descricao">Descrição da Compra:</label><br>
    <input type="text" id="descricao" name="descricao"><br>

    <label for="dataCompra">Data da Compra:</label><br>
    <input type="text" id="dataCompra" name="dataCompra"><br>

    <label for="valorCompra">Valor da Compra:</label><br>
    <input type="text" id="valorCompra" name="valorCompra"><br>

    <label for="cadastrar"></label><br>
    <input type="submit" id="cadastrar" name="cadastrar"><br>

    <p id="link2"><a href="/"><button type="button" class="btn btn-outline-primary">Deseja voltar ao Menu Principal?</button></a></p>
    </form>

</body>
</html>
