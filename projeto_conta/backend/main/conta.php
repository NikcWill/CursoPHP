
    <?php
    
    require '../class/cliente.php';
    use classe\Cliente;

    class Conta {
        
        private $agencia;
        private $contaCorrente;
        private float $saldo;
        private Cliente $titular;
        private $movimentacoes;
        
        

        public function __construct(Cliente $titular, $contaCorrente, $agencia) {
            $this->agencia = $agencia;
            $this->contaCorrente = $contaCorrente;
            $this->saldo=0;
            $this->titular = $titular;
            $this->movimentacoes = array();
            
            
        }

        public function getAgencia() {
            return $this->agencia;
        }

        public function setAgencia($agencia){
            return $this->agencia = $agencia;
        }

        public function getContaCorrente() {
            return $this->contaCorrente;
        }
        public function setContaCorrente($contaCorrente){
            return $this->contaCorrente = $contaCorrente;
        }
        
        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getTitular() {
            return $this->titular;
        }

        public function setTitular($titular){
            return $this->titular = $titular;
        }

        public function getMovimentacoes(){
            return $this->movimentacoes;
        }
      
        public function depositar($valor) {
            $this->saldo += $valor;
            $this->registrarMovimentacao("DEPÓSITO", $valor);
        }
        

        public function sacar($valor) {
            $this->saldo -= $valor;
            $this->registrarMovimentacao("SAQUE", $valor);

            
        }

        private function registrarMovimentacao($acao, $valor) {
            $dataHora = date('Y-m-d H:i:s');
            $movimentacao = "Data e Hora: $dataHora | Ação: $acao | Conta: {$this->contaCorrente} | Valor: $valor";
            array_push($this->movimentacoes, $movimentacao);
        }
    }
