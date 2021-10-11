<?php include "../config.php"; ?>
<?php 
    $id_carro = $_POST["id"];
    $verdade = 1;
    sleep(1);
    $diretorio = "upload/";
    
    if(isset($_FILES['img1'])){
        $extensao1 = strtolower(substr($_FILES['img1']['name'], -4));
        $novo_nome1 = md5(time()).$extensao1;
        move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome1);     
    }
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
    mysqli_select_db($conn, '$dbname');#seleciona o banco

    $sql_att = "UPDATE carro SET  img1='$novo_nome1', vendido='$verdade' WHERE id = '$id_carro'";

    if(mysqli_query($conn, $sql_att)){ 
        echo "<script>alert('Atualização concluida!'); window.location = '../default.php' </script>";
    } else {#se nao der faz isso
        echo "<script>alert('FALHA na atualização, verifique o ID do carro!'); window.location = './9351baixanocarro293.php' </script>";
    }

    mysqli_close($conn);#fecha o banco
?>