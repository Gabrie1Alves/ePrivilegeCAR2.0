<?php include "../config.php"; ?>
<html>
    <head>
        <title>Deixe sua opinao!</title>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $fone = $_POST['fone'];
        $op = $_POST['op'];

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco

        $sql = "INSERT INTO feedback(nome, email, telefone, opniao) VALUES ('$nome', '$email', '$fone', '$op')";

        #mensagem de erro ou acerto
        if(mysqli_query($conn, $sql)){ 

                            
                #ENVIO DE EMAIL PARA CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = "contato@eprivilegecar.com";
                $subject = "Obrigado por nos dar sua opinão!";
                $message = "Olá" . $nome . ", sua opinião é muito importante para nós! Estamos sempre buscando evoluir e inovar para nossos clientes!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);


            echo "<script>alert('Obrigado! Sua opinião é muito importante para nós!'); window.location = '../default.php'</script>" ; /* window.location = '../default.php' */
        } else {#se nao der faz isso
            echo "Falha no cadastramento!:" .$sql. "<br>" .mysqli_error($conn);
        }
        mysqli_close($conn);#fecha o banco
        ?>
    </body>
</html>