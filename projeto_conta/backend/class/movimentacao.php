<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="../../frontend/js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="../../frontend/css/style.css">

    <title>Document</title>
</head>
<body>
<header>
        <h1>Main</h1>
    </header>
    <main>
        </html> 
        <?php

use classe\Cliente;

require '../main/conta.php';

session_start();

// Verifica se a instância da classe Conta já existe na sessão
if (!isset($_SESSION['contaExemplo'])) {
    // Se não existir, cria uma nova instância e armazena na sessão
    $clienteEspecial = new Cliente($_GET["nome"], $_GET["idade"], $_GET["cpf"]);
    $contaExemplo = new Conta($clienteEspecial, 32, 32);
    $_SESSION['contaExemplo'] = $contaExemplo;
} else {
    // Se já existir, recupera a instância da sessão
    $contaExemplo = $_SESSION['contaExemplo'];
}

$auxiliar = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o formulário de depósito foi enviado
    if (isset($_POST["txt_valorDeposito"])) {
        $valorDeposito = $_POST["txt_valorDeposito"];
        $contaExemplo->depositar($valorDeposito);

        // Gerar código JavaScript para exibir a caixa de diálogo
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                var valorDeposito = '$valorDeposito';
                alert('Depósito realizado com sucesso! Valor depositado: ' + valorDeposito);
            });
        </script>";
    }

    // Verifica se o formulário de saque foi enviado
    if (isset($_POST['txt_valorSaque'])) {
        $valorSaque = $_POST['txt_valorSaque'];

        if ($contaExemplo->getSaldo() >= $valorSaque) {
            $contaExemplo->sacar($valorSaque);

            // Gerar código JavaScript para exibir a caixa de diálogo
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var valorSaque = '$valorSaque';
                    alert('Saque realizado com sucesso! Valor Sacado: ' + valorSaque);
                });
            </script>";
        } else {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var valorSaque = '$valorSaque';
                    alert('Falha ao Sacar! Saldo insuficiente! Valor: ' + valorSaque + ' Maior que o saldo');
                });
            </script>";
        }
    }
}

?>
<section>
<section>
    <h1>Agência: <?php echo $contaExemplo->getAgencia()." "?> 
        Conta Corrente: <?php echo $contaExemplo->getContaCorrente(). "<br>";?>
    </h1>
</section><h3>
    <?php 
        echo "Bem vindo a sua Conta ".$contaExemplo->getTitular()->getNome()."<br><br>";
        echo "Titular: " . $contaExemplo->getTitular()->getNome() . "<br>";
        echo "Idade: " . $contaExemplo->getTitular()->getIdade() . "<br>";
        echo "CPF: " . $contaExemplo->getTitular()->getCpf() . "<br><br>";
        
    ?>
    </h3>
    <section id="secaoSaldo">
        <h2 id="saldoAtualizado">Saldo: <?php echo $contaExemplo->getSaldo();?></h2>
        
    </section>

    
</section>

<section>
    <h2>Movimentação</h2>
    <button onclick="mostra('modal')">Extrato</button>
    <dialog id="modal">
        <section>
            <h1>Movimentações</h1>
            <ul>
            <?php
                foreach ($contaExemplo->getMovimentacoes() as $movimentacao) {
                    echo "<li>$movimentacao</li>";
                }
            ?>
            </ul>
            <button onclick="esconder('modal')">Fechar</button>
        </section>
    </dialog>
</section>

<section>
        <form id="sacarForm" method="post">
            <h2>Sacar</h2>
            <label for="lbl_valor">Valor:</label>
            <input type="text" name="txt_valorSaque" minlength="1" maxlength="120" required>
            <input type="submit" value="Sacar">
        </form>
    </section>
    
    <section>
        <form id="depositarForm" method="post">
            <h2>Depositar</h2>
            <label for="lbl_valor">Valor:</label>
            <input type="text" name="txt_valorDeposito" minlength="1" maxlength="120" required>
            <input type="submit" value="Depositar">
        </form>
        
    </section>

</main>
    
</body>



