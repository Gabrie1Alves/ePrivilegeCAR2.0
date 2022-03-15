<?php 
    $servidor="localhost";
    $dbname="eprivilegecar";
    $dbusuario = "root";
    $dbsenha = "";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("Falha na conexão: " .mysqli_connect_error());
    }else{}
/*
    $servidor="xxxxxxxxxxxxxxxxxx";
    $dbname="xxxxxxxxxxxxxxx";
    $dbusuario = "xxxxxxxxxxxxx";
    $dbsenha = "xxxxxxxxxxxxx";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("Falha na conexão: " .mysqli_connect_error());
    }else{}*/
?>

