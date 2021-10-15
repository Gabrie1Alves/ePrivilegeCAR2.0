<?php include "../config.php"; ?>
<html>
    <body>
        <?php
            #recebe valores da URL e salva nas variaveis
        $nome = $_POST["name"]; 
        $cpf = $_POST["cpf"];
        $fone = $_POST["fone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["num"];
        $complemento = $_POST["comp"];
        $recebeEmail = $_POST["recebeEmail"];
        $cond = $_POST["cond"];


        #verifica tamanho e condições
        if($cond != 'on'){
            echo "<script>alert('Os termos e condições devem ser aceitos!'); window.location = './vender.php' </script>";
            return;
        }
        if(strlen($nome) < 7 || strlen($fone) != 11 || strlen($cep) != 8 || strlen($email) < 10){
            echo "<script>alert('Os dados são inválidos! Verifique os mesmos!'); window.location = './vender.php' </script>";
            return;
        }
        #verificar se tem numeros na string
        if(filter_var($nome, FILTER_SANITIZE_NUMBER_INT) !== ''){
            echo "<script>alert('Seu nome não pode conter numeros!'); window.location = './vender.php' </script>";
            return;
        }
        if(filter_var($cidade, FILTER_SANITIZE_NUMBER_INT) !== ''){
            echo "<script>alert('Sua cidade não pode conter numeros!'); window.location = './vender.php' </script>";
            return;
        }
        #verificar cpf
            // Extrai somente os números
            $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
            
            // Verifica se foi informado todos os digitos corretamente
            if (strlen($cpf) != 11) {
                echo "<script>alert('CPF Inválido!'); window.location = './vender.php' </script>";
                return;
            }

            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                echo "<script>alert('CPF Inválido!'); window.location = './vender.php' </script>";
                return;
            }

        #verifica telefone
        $fone = preg_replace( '/[^0-9]/is', '', $fone );
            if (strlen($fone)!=11):
                echo "<script>alert('telefone Inválido!'); window.location = './vender.php' </script>";
                return;
            else:
                
            endif;
        #verifica email
            if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            else:
                echo "<script>alert('Email Inválido!'); window.location = './vender.php' </script>";
                return;
            endif;
        #valida CEP
            if (preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $cep)):
            else:
                echo "<script>alert('CEP Inválido!'); window.location = './vender.php' </script>";
                return;
            endif;
        #verifica numero
    
        



    #conectando no banco de dados novamente
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco

        #=====================================================================================================================
        #se o cpf já existir, apenas alterar os dados cadastrados
        
        $sql = "SELECT cpf FROM vendedor where cpf = '$cpf'";
        $query = mysqli_query($conn, $sql);

        if($query->num_rows > 0){#se o cpf existe altera dados
            $sql_att = "UPDATE vendedor SET nome='$nome', fone='$fone', email='$email', cep='$cep', estado='$estado', cidade='$cidade', endereco='$endereco', numero='$numero', complemento='$complemento', condicoes='$cond', receberEmail='$recebeEmail' WHERE cpf = '$cpf'";
            if(mysqli_query($conn, $sql_att)){ #se der certo faz isso

                #ENVIO DE EMAIL PARA O CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = $email;
                $subject = "Obrigado por nos escolher!";
                $message = "Olá" . $nome . ", em breve um de nossos profissionais entrará em contato com você para marcar o dia e horário da vistoria!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);


                #ENVIO PARA O PROFISSIONAL DA VISTORIA
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = "contato@eprivilegecar.com"; #colocar email do cara da vistoria
                $subject = "Agende a vistoria.";
                $message = "Olá! Temos um novo cliente, entre em contato com o mesmo e agende sua vistoria." . "<br>Suas informações:" . "<br>Nome: " . $nome . "<br>Telefone: " . $fone . "<br>Email: " . $email . "<br>CEP: " . $cep . "<br>Estado: " . $estado . "<br>Cidade: " . $cidade . "<br>Endereço: " . $endereco . "<br>Número: " . $numero . "<br>Complemento: " . $complemento;
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);


                echo "<script>alert('Os dados foram alterados e salvos salvos! Em breve entraremos em contato com você.'); window.location = '../default.php' </script>";
            } else {#se nao der faz isso
                echo "Falha ao salvar os dados:" .$sql_att. "<br>" .mysqli_error($conn);
            }
            mysqli_close($conn);#fecha o banco

        }else{                   #se o cpf nao existe cria
            $sql_vendedor = "INSERT INTO vendedor(nome, cpf, fone, email, cep, estado, cidade, endereco, numero, complemento, condicoes, receberEmail) VALUES ('$nome','$cpf','$fone','$email','$cep','$estado', '$cidade','$endereco','$numero','$complemento', '$cond', '$recebeEmail')";
            if(mysqli_query($conn, $sql_vendedor)){ #se der certo faz isso

                #ENVIO DE EMAIL PARA O CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = $email; 
                $subject = "Obrigado por nos escolher!";
                $message = "Olá " . $nome . ", em breve um de nossos profissionais entrará em contato com você para marcar o dia e horário da vistoria!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                #ENVIO PARA O PROFISSIONAL DA VISTORIA
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = "contato@eprivilegecar.com"; #colocar email do cara da vistoria
                $subject = "Agende a vistoria.";
                $message = "Olá! Temos um novo cliente, entre em contato com o mesmo e agende sua vistoria.". 
                    " Informações " . 
                        " Nome: " . $nome .
                        " CPF: ". $cpf . 
                        " Telefone: " . $fone . 
                        " Email: " . $email . 
                        " CEP: " . $cep . 
                        " Estado: " . $estado . 
                        " Cidade: " . $cidade . 
                        " Endereço: " . $endereco . 
                        " Número: " . $numero . 
                        " Complemento: " . $complemento;
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                echo "<script>alert('Os dados foram salvos! Em breve entraremos em contato com você.'); window.location = '../default.php' </script>";

            } else {#se nao der faz isso
                echo "Falha ao salvar os dados:" .$sql_vendedor. "<br>" .mysqli_error($conn);
            }

            mysqli_close($conn);#fecha o banco
        }


        ?>

        
        
    </body>
</html>