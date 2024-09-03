<?php

namespace Projeto\projetoestacionamento\php;
 require_once ("Entrada.php");
 require_once ("controllEntrada.php");
 use Projeto\projetoestacionamento\php\Entrada;
 use Projeto\projetoestacionamento\php\controllEntrada;
 
 
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
 
 
        <button>
            cadastrar
     
    
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

                  
                   
                 

                ?>
</body>
</html>