<?php

namespace Projeto\projetoestacionamento\php;
require_once("Mensalista.php");
 use Projeto\projetoestacionamento\php\Mensalista;
 use Projeto\projetoestacionamento\php\controllMensalista;
 
 $codigo = 0;
 $nome   = "";
 $telefone = "";
 $endereco = "";
 $carro = "";
 $placa = "";
 $salario = 0;
    
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
        <label>Nome:</label>
        <input type="text" id="nome" name="nome"> <br><br>
 
        <label>Telefone:</label>
        <input type="text" id="telefone" name="telefone"> <br><br>
 
        <label>Endereço:</label>
        <input type="text" id="endereco" name="endereco"> <br><br>
 
        <label>Carro:</label>
        <input type="text" id="carro" name="carro"> <br><br>
 
        <label>Placa:</label>
        <input type="text" id="placa" name="placa"> <br><br>

 
        <label>Data de Pagamneto :</label>
        <input type="text" id="dataPagamento" name="dataPagamento"> <br><br>
 
        <label>Valor Mensal :</label>
        <input type="text" id="valorMensal" name="valorMensal"> <br><br>
 
        <button>
            cadastrar
        </button>
    
        <?php
          
            try{
 
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $endereco = $_POST['endereco'];
                $carro = $_POST['carro'];
                $placa = $_POST['placa'];
                $datadepagamento = $_POST['dataPagamento'];
                $valorMensal =(float)$_POST['valorMensal'];
 
               
                $mensalista = new Mensalista (  $nome,
                                                $telefone,
                                                $endereco,
                                                $carro,
                                                $placa,
                                                $datadepagamento,
                                                $valorMensal);
            }catch(Exception $erro){
                echo $erro;
 
            }
        ?>
    </form>
 
    <?php
                    echo $mensalista->imprimir();
                ?>
</body>
</html>