<?php

    namespace Projeto\ProjetoEstacionamento\PHP;
    require_once ("index.html");
    require_once ("gerente.html");
    require_once ("controllGerente.html");
    use Projeto\ProjetoEstacionamento\PHP\Consultar;
    use Projeto\ProjetoEstacionamento\PHP\ConsultarGerente;
  ?>

    <html>
    <head>
     <body>
     <button>Consultar</button> 
     <?php
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
            ?>
          </button>
        </body>
    </html>
        
    

