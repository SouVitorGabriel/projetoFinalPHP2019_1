<?php
    class ContaBancaria
    {
        private $nConta;
        private $nAgencia;
        private $saldo;
        private $senha = "Dibraudinho";

        public function GetConta()
        {
            return $this->nConta;
        }

        public function GetAgencia()
        {
            return $this->nAgencia;
        }

        public function SetConta($numero)
        {
            $this->nConta = $numero;
        }

        public function SetAgencia($numero)
        {
            $this->nAgencia = $numero;
        }

        public function Saque($valor, $senha)
        {
            if ($senha == $this->senha)
            {
                $this->saldo = $this->saldo - $valor;
                return $valor;
            }
            else
            {
               echo "Tá de hack filhaum";
            }
        }

        public function Deposito($valor)
        {
            $this->saldo = $this->saldo + $valor;
        }

        public function GetSaldo()
        {
            return $this->saldo;
        }
    }

    $MinhaConta = new ContaBancaria();

    $MinhaConta->SetConta(12345);
    $MinhaConta->SetAgencia(10101010);

    $MinhaConta->Deposito(1000);

    echo $MinhaConta->GetSaldo() . "<br> <br>";

    $MinhaConta->Saque(10, "Dibraudinho") . "<br><br>";

    echo "<br>". $MinhaConta->GetSaldo() . "<br> <br>";

    echo $MinhaConta->GetAgencia();
?>