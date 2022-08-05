<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassoword = '123';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassoword,$dbName);

    //if($conexao->connect_errno)
    //{
       // echo "ERRO";
   // }else 
   // {
      //  ECHO "TUDO OK!";
   // }

?>