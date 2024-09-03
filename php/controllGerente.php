<?php

namespace Projeto\projetoestacionamento\php;
 require_once ("gerente.php");
 require_once ("controllGerente.php");
 use Projeto\projetoestacionamento\php\Entrada;
 use Projeto\projetoestacionamento\php\controllEntrada;
 
 
 class controllFuncionário{
    private int $codigo;
    private string $nome;
    private string $dtNascimento;
    private string $telefone;
    private string $endereço;
    private float $salario;
    private string $cargo;
 
     public function __construct(
     int $codigo,
     string $nome,
     string $dtNascimento,
     string $telefone,
     string $endereço,
     float $salario,
     string $cargo
     )

     {
         $this->codigo = $codigo;
         $this->nome = $nome;
         $this->dtNascimento = $dtNascimento;
         $this->telefone = $telefone;
         $this->endereço = $endereço; 
         $this->salario = $salario; 
         $this->cargo = $cargo;
     }
 }
    
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Código </label>
        <input type="text" id="codigo" name="codigo"> <br><br>
 
        <label>Nome</label>
        <input type="text" id="nome" name="nome"> <br><br>
 
        <label>Data de Nascimento</label>
        <input type="text" id="dtNascimento" name="dtNascimento"> <br><br>
 
        <label>Telefone: </label>
        <input type="text" id="telefone" name="telefone"> <br><br>
 
        <label>Endereço  </label>
        <input type="text-" id="endereco" name="endereco"> <br><br>

 
        <label>Salário</label>
        <input type="text-" id="salario" name="salario"> <br><br>

        <label>Cargo</label>
        <input type="text-" id="cargo" name="cargo"> <br><br>
 
 
 
        <button>
            cadastrar
        </button>
    
        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoestacionamento\php\gerente;
            use Projeto\projetoestacionamento\php\controllGerente;
            
            try{
 
                $codigo= $_POST['codigo'];
                $nome= $_POST['nome'];
                $dtNascimento = $_POST['dtNascimento'];
                $telefone = $_POST['telefone'];
                $endereço = $_POST['endereco'];
                $salario= $_POST['salario'];
                $cargo = $_POST['cargo'];
                
 
               
                $gerente = new gerente(  $codigo,
                                                $nome,
                                                $dtNascimento,
                                                $telefone,
                                                $endereço,
                                                $salario,
                                                $cargo);
                                                
            }catch(Exception $erro){
                echo $erro;
 
            }
        ?>
    </form>
 
    <?php
                    echo $gerente->imprimir();
                ?>
</body>
</html>