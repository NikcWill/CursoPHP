<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"]; 
            if ($n == null ){
                $n = "sem nome";
            }
            $s = $_GET["sobrenome"];
            if ($s == null){
                $s = "desconhecido";
            }
            echo "<p>É um prazer em conhecer, $n $s! Este é o meu site";
            
        ?>
        <p><a href="javascript: history.go(-1)"> Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>