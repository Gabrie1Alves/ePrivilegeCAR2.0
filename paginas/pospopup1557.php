<?php include "../config.php"; ?>
<html>
    <body>
        <?php
            $email = $_POST["email"];
            $nome = $_POST["nome"];
            $fone = $_POST["fone"];


            #conecta com o banco
            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
            mysqli_select_db($conn, '$dbname');#seleciona o banco

            $sql = "INSERT INTO popup(email, nome, telefone) VALUES ('$email', '$nome', '$fone')";
            if(mysqli_query($conn, $sql)){ #se der certo faz isso

                #ENVIO DE EMAIL PARA O CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = $email; 
                $subject = "Obrigado por nos escolher!";
                $message = "Olá " . $nome . ", em breve um de nossos profissionais entrará em contato com você!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                #ENVIO PARA FUNCIONÁRIOS
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = "contato@eprivilegecar.com"; #colocar email do cara da vistoria
                $subject = "Agende a vistoria.";
                $message = "Olá! Temos um novo cliente querendo informações. Entre em contato com ele com as informações a seguir: ". 
                        " Email: " . $email . 
                        " Nome: " . $nome .
                        " Telefone: " . $fone;
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                echo "<script>alert('Em breve entraremos em contato com você.'); window.location = '../default.php' </script>";

            } else {#se nao der faz isso
                echo "Falha ao salvar os dados:" .$sql. "<br>" .mysqli_error($conn);
            }

            mysqli_close($conn);#fecha o banco
        ?>
    </body>
</html>