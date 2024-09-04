 <?php 
    namespace Projeto\projetoestacionamento\php;
    require_once ("../php/controllEntrada.php");
    require_once ("../php/controllCalcular.php");
    require_once ("../php/calculo.php");
    use Projeto\projetoestacionamento\php\Entrada;
    use Projeto\projetoestacionamento\php\controllCalcular;
    use Projeto\projetoestacionamento\php\calculo;

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
        <label>Horário de entrada</label>
        <input type="text" id="codigo" name="codigo"> <br><br>
 
        <label>Horário de saída</label>
        <input type="text" id="hrEntrada" name="hrEntrada"> <br><br>
 

            <a href="../html/funcionario.html" class="btn btn-primary">Voltar</a> 
            
            
     
    
        <?php
            namespace Projeto\projetoestacionamento\php;
            use Projeto\projetoEstacionamento\php\Entrada;
            use Projeto\projetoEstacionamento\php\controllEntrada;
            
            try{
                session_start();
                $_SESSION['hr5Entrada'] = $_POST['hrEntrada'];
                $_SESSION['hrSaída'] = $_POST['hrSaída'];
               
 
               
                $entrada = new entrada ( 
                         $_SESSION['hrEntrada'], 
                         $_SESSION['hrSaida'],
                );
                                                
            }catch(Exception $erro){
                echo $erro;
 
            }
        ?>
         </button>
    </form>
 
    <?php
                  
                   echo $total->imprimir();
                 

                  
                   
                 

                ?>