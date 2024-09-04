<?php

namespace Projeto\projetoestacionamento\php;
 require_once ("../php/Entrada.php");
 require_once ("../php/controllEntrada.php");
 require_once ("../php/calculo.php");
 use Projeto\projetoestacionamento\php\Entrada;
 use Projeto\projetoestacionamento\php\controllEntrada;
 use Projeto\projetoestacionamento\php\calculo;
 
 
 
 class controllEntrada{
            private int $codigo;
            private string $dtEntrada;
            private string $dtsaida;
            private string $hrEntrada;
            private string $hrSaida;
            private string $veiculo;
            
    
    public function __construct(
                int $codigo,
                string $dtEntrada,
                string $dtSaida,
                string $hrEntrada,
                string $hrSaida,
                string $veiculo
        )

        {
            $this->codigo = $codigo;
            $this->dtEntrada = $dtEntrada;
            $this->dtSaida = $dtSaida;
            $this->hrEntrada = $hrEntrada;
            $this->hrSaida = $hrSaida;
            $this->veiculo = $veiculo; 
          
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
 
        <label>Data Entrada</label>
        <input type="text" id="dtEntrada" name="dtEntrada"> <br><br>
 
        <label>Data Saída:</label>
        <input type="text" id="dtSaida" name="dtSaida"> <br><br>
 
        <label>Hora Entrada: </label>
        <input type="text" id="hrEntrada" name="hrEntrada"> <br><br>
 
        <label>Hora Saída: </label>
        <input type="text-" id="hrSaida" name="hrSaida"> <br><br>

 
        <label>Veículo</label>
        <input type="text-" id="veiculo" name="veiculo"> <br><br>
 
        <button class="btn btn-primary">Cadastrar</button>

            <a href="../html/funcionario.html" class="btn btn-primary">Voltar</a> 
            
            
     
    
        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoEstacionamento\php\Entrada;
            use Projeto\projetoEstacionamento\php\controllEntrada;
            
            try{
                session_start();
                $_SESSION['codigo'] = $_POST['codigo'];
                $_SESSION['dtEntrada'] = $_POST['dtEntrada'];
                $_SESSION['dtSaida'] = $_POST['dtSaida'];
                $_SESSION['hrEntrada'] = $_POST['hrEntrada'];
                $_SESSION['hrSaida'] = $_POST['hrSaida'];
                $_SESSION['veiculo'] = $_POST['veiculo'];


                $entrada = new entrada ( $_SESSION['codigo'],
                         $_SESSION['dtEntrada'], 
                         $_SESSION['dtSaida'],
                         $_SESSION['hrEntrada'],
                         $_SESSION['hrSaida'], 
                         $_SESSION['veiculo']);
                                                
            }catch(Exception $erro){
                echo $erro;
 
            }
        ?>
         </button>
    </form>
 
    <?php
                  
                   echo $entrada->imprimir();
                   echo "<br>";
                ?>

                <br><br>
                <h1>Total a ser pago:</h1>

        <?php

        $num1 = $_POST['hrEntrada'];
        $num2 = $_POST['hrSaida'];

        function calcular($hora1, $hora2){
             $total = $hora2 / 100 - $hora1 / 100;
            if ($total >= 1){
                return $total= 10;
            }else{
                return $total= 5;
            }
    }

        ?>

        <textarea name="100" rows="5" cols="100">
        <?php
        echo "Valor total é:" .calcular($num1, $num2);
        ?>
        </textarea>

    
       


</body>
</html>