<?php include "../config.php"; ?>
<?php 
    $cpfVendedor = $_POST["cpfV"];
    $cpfComprador = $_POST["cpfC"];
    $verdade =  1;


    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
    mysqli_select_db($conn, '$dbname');#seleciona o banco

    $sql_att = "UPDATE transacoes SET  transacao='$verdade' WHERE cpf_vendedor = '$cpfVendedor' and cpf_cnpj_comprador = '$cpfComprador'";

    if(mysqli_query($conn, $sql_att)){ 
        echo "<script>alert('Atualização concluida!'); window.location = '../default.php' </script>";
    } else {#se nao der faz isso
        echo "<script>alert('FALHA na atualização, verifique os CPF ou CNPJ e tente novamente!'); window.location = './9351baixanocarro293.php' </script>";
    }

    mysqli_close($conn);#fecha o banco
?>