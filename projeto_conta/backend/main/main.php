<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../frontend/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Main</h1>
    </header>
    <main>
    <?php
    require '../class/cliente.php';
    use classe\Cliente;
    
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];

        var_dump($nome);
        var_dump($idade);
        var_dump($cpf);

        $cliente = new Cliente ($nome, $idade, $cpf);
        $cliente->setNome($nome);
        $cliente->setIdade($idade);
        $cliente->setCpf($cpf);

        var_dump($cliente);

    ?>
    </main>
    

   
</body>
</html>
