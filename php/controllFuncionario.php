<?php

namespace Projeto\projetoestacionamento\php;
 require_once ("funcionario.php");
 use Projeto\projetoEstacionamento\php\funcionario;
 use Projeto\projetoEstacionamento\php\controllFuncionario;
 
 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo1.css">
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
            
       
    
        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoestacionamento\php\funcionario;
            use Projeto\projetoestacionamento\php\controllFuncionario;
            
            try{
 
                session_start();
                $_SESSION['codigo'] = $_POST['codigo'];
                $_SESSION['nome'] = $_POST['nome'];
                $_SESSION['dtNascimento'] = $_POST['dtNascimento'];
                $_SESSION['telefone'] = $_POST['telefone'];
                $_SESSION['endereco'] = $_POST['telefone'];
                $_SESSION['salario'] = $_POST['salario'];
                $_SESSION['cargo'] = $_POST['cargo'];
 
               
                $funcionario = new funcionario ( $_SESSION['codigo'],
                         $_SESSION['nome'], 
                         $_SESSION['dtNascimento'],
                         $_SESSION['telefone'],
                         $_SESSION['telefone'], 
                         $_SESSION['salario'],
                         $_SESSION['cargo']);

                        //   header("location: ../html/funcionario.html");
                        //  exit;
                        
                    
                                                
            }catch(Exception $erro){
                echo $erro;
 
            }
        ?>
         </button>
    </form>
 
    <?php
                    
                        echo $funcionario->imprimir();
                
                ?>
                <br><br>
                <a href="../html/Index.html" class="btn btn-primary">Voltar</a>

                <a href="../html/funcionario.html" class="btn btn-primary">Próximo</a>
              
</body>
</html>