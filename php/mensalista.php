<?php 

    namespace Projeto\ProjetoEstacionamento\PHP;
    use Projeto\ProjetoEstacionamento\PHP\Mensalista;

    class Mensalista {
       private string $nome;
       private string $telefone;
       private string $endereco;
       private string $carro;
       private string $placa;
       private string $dataPagamento;
       private float $valorMensal;
    
        public function __construct(
        string $nome,
        string $telefone,
        string $endereco,
        string $carro,
        string $placa,
        string $dataPagamento,
        float $valorMensal
        )

        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->carro = $carro;
            $this->placa = $placa; 
            $this->dataPagamento = $dataPagamento; 
            $this->valorMensal = $valorMensal;
        }
    
        public function getnome ():string
         {
             return $this->nome;

         }//fim do método get

        public function setnome (string $nome):void 
         {
             $this->nome = $nome;

         }//fim do método set
   
        public function gettelefone ():string
         {
             return $this->telefone;

         }//fim do método get

        public function settelefone (string $telefone):void
         {
             $this->telefone = $telefone;

         }//fim do método set

        public function getendereco ():string
         {
              return $this->endereco;

         }//fim do método get

        public function setendereco (string $endereco):void
         {
               $this->endereco = $endereco;

         }//fim do método set

        public function getcarro():string
         {
             return $this->carro;

         }//fim do método get

        public function setcarro(string $carro)
         {
                 $this->carro = $carro;

         }//fim do método set

        public function getplaca ():string
         {
             return $this->placa;

         }//fim do método get

        public function setplaca (string $placa)
         {
               $this->placa = $placa;

         }//fim do método set

        public function getdataPagamento ():string
         {
             return $this->dataPagamento;

         }//fim do método get

        public function setdataPagamento (string $dataPagamento)
         {
             $this->dataPagamento = $dataPagamento;

         }//fim do método set

        public function getvalorMensal ():string
         {
            return $this->valorMensal;

         }//fim do método get

        public function setvalorMensal(string $valorMensal):void
         {
             $this->valorMensal = $valorMensal;

         }//fim do método set


        public function imprimir():string
            {
                return 
                "<br><br>Nome: " .$this->getnome().
                "<br>Telefone: " .$this->gettelefone().
                "<br>Endereço:" .$this->getendereco().
                "<br>Carro:" .$this->getcarro().
                "<br>Placa:" .$this->getplaca().
                "<br>Data Pagamento:" .$this->getdataPagamento().
                "<br>Valor Mensal:" .$this->getvalorMensal(). "<br><br";
            }

        }
