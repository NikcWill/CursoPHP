<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/projetoConta/frontend/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Main</h1>

    <?php 
        require '../classes/cliente.php';

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];

        $cliente = new Cliente($nome, $idade, $cpf);
        $cliente->setNome($nome);
        $cliente->setIdade($idade);
        $cliente->setCpf($cpf);
    ?>
</body>
</html>
