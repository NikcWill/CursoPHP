    <?php 
        class Conta {
            private $agencia;
            private $contaCorrente;
            private $saldo;
            private $titular;
            private $movimentacoes;

            public function __construct($agencia, $contaCorrente, $saldo, $titular) {
                $this->agencia = $agencia;
                $this->contaCorrente = $contaCorrente;
                $this->saldo = $saldo;
                $this->titular = $titular;
                $this->movimentacoes = [];
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getContaCorrente() {
        return $this->contaCorrente;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        $this->registrarMovimentacao("DEPÓSITO", $valor);
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            return false; // Saldo insuficiente
        }

        $this->saldo -= $valor;
        $this->registrarMovimentacao("SAQUE", $valor);

        return true; // Saque realizado com sucesso
    }

    public function getExtrato() {
        $extrato = "Nome do Titular: {$this->titular->getNome()}\n";
        $extrato .= "Idade: {$this->titular->getIdade()}\n";
        $extrato .= "CPF: {$this->titular->getCpf()}\n";
        $extrato .= "Agência: {$this->agencia}\n";
        $extrato .= "Conta Corrente: {$this->contaCorrente}\n";
        $extrato .= "Saldo: R$ {$this->saldo}\n";

        return $extrato;
    }

    private function registrarMovimentacao($acao, $valor) {
        $dataHora = date('Y-m-d H:i:s');
        $movimentacao = "Data e Hora: $dataHora | Ação: $acao | Conta: {$this->contaCorrente} | Valor: $valor";
        array_push($this->movimentacoes, $movimentacao);
    }
}


?>
