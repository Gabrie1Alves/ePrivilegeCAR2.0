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
    $servidor="localhost";
    $dbname="u701525916_eprivilegecar";
    $dbusuario = "u701525916_eprivilegecar";
    $dbsenha = "e234Privilege765car";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("Falha na conexão: " .mysqli_connect_error());
    }else{}*/
?>

