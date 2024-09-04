<?php 
     namespace Projeto\ProjetoEstacionamento\PHP;
      require_once ("cadastro.php");
      require_once ("mensalista.php");
      require_once ("controllMensalista.php");
      require_once ("Entrada.php");
      require_once ("controllEntrada.php");
      use Projeto\ProjetoEstacionamento\PHP\Cadastro;
      use Projeto\ProjetoEstacionamento\PHP\Main;
      use Projeto\ProjetoEstacionamento\PHP\Mensalista;
      use Projeto\projetoestacionamento\php\controllMensalista;
      use Projeto\ProjetoEstacionamento\PHP\Entrada;
      use Projeto\projetoestacionamento\php\controllEntrada;
 

      


      $cadastro = new Cadastro(12345, "Gabs", "09/04/2008", 123456789, 
      "Avenida Brasil", 50, "Gerente");
      echo $cadastro->imprimir();

      $mensalista = new Mensalista ("Allan","987654321", "Avenida Paulista", "BMW", "mar124", "12/7/20024", 76);
      echo $mensalista->imprimir();

      $entrada = new Entrada (123, "09/04/20024", "10/04/20024", "12:22", "13:22", "fusca");
      echo $entrada->imprimir();

      $calculo = new Calculo (10, 2);
      echo $calculo->imprimir();

     

  