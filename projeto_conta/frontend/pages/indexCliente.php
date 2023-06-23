<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="../js/scripts.js" defer> </script>
    <title>Interação com Formulários</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
</head>
<body>   
    <header>
        <h1>Cadastro de Titular</h1>
    </header>
    <section>
        <form action="../../backend/class/movimentacao.php" method="get">
            <h2>Cadastro de Pessoa Titular</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" minlength="3" maxlength="120" required>
            <label for="idade">Idade:</label>
            <input type="number" name="idade" min="18" max="120" required>
            <label for="cpf">CPF:</label>
            
            <input type="text" name="cpf" id="cpf" minlength="14" maxlength="14"  required>
            
            <input type="submit" value="Cadastrar">
        </form>
    </section>

    <!-- mascara do cpf -->

    <script>
        $(document).ready(function() {
            $('#cpf').mask('999.999.999-99');
        });
    </script>
    session_destroy();
</body>
</html>
