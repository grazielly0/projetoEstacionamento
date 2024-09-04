<?php


        namespace Projeto\ProjetoEstacionamento\PHP;
        use Projeto\ProjetoEstacionamento\PHP\Funcionario;

    class funcionario {
       private int $codigo;
       private string $nome;
       private string $dtNascimento;
       private string $telefone;
       private string $endereco;
       private float $salario;
       private string $cargo;
    
        public function __construct(
        int $codigo,
        string $nome,
        string $dtNascimento,
        string $telefone,
        string $endereco,
        float $salario,
        string $cargo
        )

        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->dtNascimento = $dtNascimento;
            $this->telefone = $telefone;
            $this->endereço = $endereco; 
            $this->salario = $salario; 
            $this->cargo = $cargo;
        }
    
        public function getcodigo ():int
         {
             return $this->codigo;

         }//fim do método get

        public function setcodigo (int $codigo):void 
         {
             $this->codigo = $codigo;

         }//fim do método set
   
        public function getnome ():string
         {
             return $this->nome;

         }//fim do método get

        public function setnome (string $nome):void
         {
             $this->nome = $nome;

         }//fim do método set

        public function getdtNascimento ():string
         {
              return $this->dtNascimento;

         }//fim do método get

        public function setdtNascimento (string $dtNascimento):void
         {
               $this->dtNascimento = $dtNascimento;

         }//fim do método set

        public function getTelefone():string
         {
             return $this->telefone;

         }//fim do método get

        public function setTelefone(string $telefone)
         {
                 $this->telefone = $telefone;

         }//fim do método set

        public function getendereco ():string
         {
             return $this->endereço;

         }//fim do método get

        public function setendereco (string $endereço)
         {
               $this->endereço = $endereço;

         }//fim do método set

        public function getsalario ():float
         {
             return $this->salario;

         }//fim do método get

        public function setsalario (float $salario)
         {
             $this->salario = $salario;

         }//fim do método set

        public function getcargo ():string
         {
            return $this->cargo;

         }//fim do método get

        public function setcargo(string $cargo):void
         {
             $this->cargo = $cargo;

         }//fim do método set


        public function imprimir():string
            {
                return 
                "<br><br>Código: " .$this->getcodigo().
                "<br>Nome: " .$this->getnome().
                "<br>Data de Nascimento:" .$this->getdtNascimento().
                "<br>Telefone:" .$this->gettelefone().
                "<br>Endereço:" .$this->getendereco().
                "<br>Salário:" .$this->getsalario().
                "<br>Cargo:" .$this->getcargo()."<br><br";
                header("location: funcionario.html");
                exit;
            }

        }