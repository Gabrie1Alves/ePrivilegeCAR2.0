<?php include "../config.php"; ?>
<html>
    <head>
        <title>ePrivilègeCAR</title>
    </head>
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
        $cond = $_POST["condicoes"];
        $id_carro = $_POST["id_carro"];
        $cpf_vendedor = $_POST["cpf_vendedor"];

        #verifica tamanho e condições
        if($cond != 'on'){
            echo "<script>alert('Os termos e condições devem ser aceitos!'); window.location = './realizarCompra.php'</script>";
            return;
        }
        if(strlen($nome) < 7 || strlen($fone) != 11 || strlen($cep) != 8 || strlen($email) < 10){
            echo "<script>alert('Os dados são inválidos! Verifique os mesmos!'); window.location ='./realizarCompra.php'</script>";
            return;
        }
        #verificar se tem numeros na string
        if(filter_var($nome, FILTER_SANITIZE_NUMBER_INT) !== ''){
            echo "<script>alert('Seu nome não pode conter numeros!'); window.location = './realizarCompra.php' </script>";
            return;
        }
        if(filter_var($cidade, FILTER_SANITIZE_NUMBER_INT) !== ''){
            echo "<script>alert('Sua cidade não pode conter numeros!'); window.location = './realizarCompra.php' </script>";
            return;
        }
        #verificar cpf
            // Extrai somente os números
            $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
            
            // Verifica se foi informado todos os digitos corretamente
            if (strlen($cpf) > 14) {
                echo "<script>alert('CPF Inválido!'); window.location = './realizarCompra.php' </script>";
                return;
            }

            // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                echo "<script>alert('CPF Inválido!'); window.location = './realizarCompra.php' </script>";
                return;
            }

        #verifica telefone
        $fone = preg_replace( '/[^0-9]/is', '', $fone );
            if (strlen($fone)!=11):
                echo "<script>alert('telefone Inválido!'); window.location = './realizarCompra.php' </script>";
                return;
            else:
                
            endif;
        #verifica email
            if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            else:
                echo "<script>alert('Email Inválido!'); window.location = './realizarCompra.php' </script>";
                return;
            endif;
        #valida CEP
            if (preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $cep)):
            else:
                echo "<script>alert('CEP Inválido!'); window.location = './realizarCompra.php' </script>";
                return;
            endif;
        #verifica numero

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco

        $sql = "SELECT cpf_cnpj FROM comprador where cpf_cnpj = '$cpf'";
        $query = mysqli_query($conn, $sql);

        if($query->num_rows > 0){#se o cpf_cnpj existe altera dados
            $sql_att = "UPDATE comprador SET nome='$nome', fone='$fone', email='$email', cep='$cep', estado='$estado', cidade='$cidade', endereco='$endereco', numero='$numero', complemento='$complemento', condicoes='$cond', receberEmail='$recebeEmail' WHERE cpf_cnpj = '$cpf'";
            if(mysqli_query($conn, $sql_att)){ #se der certo faz isso
                #ENVIO DE EMAIL PARA CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = $email;
                $subject = "Obrigado por nos escolher!";
                $message = "Olá " . $nome . ", em breve um de nossos profissionais entrará em contato com você para começar a negociação do carro!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                echo "<script>alert('Os dados foram salvos! Em breve entraremos em contato com você.'); window.location = '../default.php' </script>";
            }
        }else{                   #se o cpf nao existe cria
            $sql_comprador = "INSERT INTO comprador(nome, cpf_cnpj, fone, email, cep, estado, cidade, endereco, numero, complemento, condicoes, receberEmail) VALUES ('$nome','$cpf','$fone','$email','$cep','$estado', '$cidade','$endereco','$numero','$complemento', '$cond', '$recebeEmail')";
            if(mysqli_query($conn, $sql_comprador)){ #se der certo faz isso
                             
                #ENVIO DE EMAIL PARA CLIENTE
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "contato@eprivilegecar.com";
                $to = $email;
                $subject = "Obrigado por nos escolher!";
                $message = "Olá " . $nome . ", em breve um de nossos profissionais entrará em contato com você para começar a negociação do carro!";
                $headers = "From:" . $from;
                mail($to,$subject,$message, $headers);

                echo "<script>alert('Os dados foram salvos! Em breve entraremos em contato com você.'); window.location = '../default.php' </script>";
            }

        }
        mysqli_close($conn);#fecha o banco

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco
        $sql_transacao = "INSERT INTO transacoes(cpf_vendedor, id_carro, cpf_cnpj_comprador, nome_comprador) VALUES ('$cpf_vendedor', '$id_carro', '$cpf', '$nome')";

        #mensagem de erro ou acerto
        if(mysqli_query($conn, $sql_transacao)){ 

        } else {#se nao der faz isso
            echo "Falha no cadastramento!:" .$sql_transacao. "<br>" .mysqli_error($conn);
        }

        #Fazer select dos dados do dono do carro e enviar para quem for realizar a trasação
        #Pegar dados do carro
            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
            mysqli_select_db($conn, '$dbname');#seleciona o banco

            $sql_carro = "SELECT * FROM carro where id = $id_carro"; 
            $result = $conn->query($sql_carro);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                $cpf_vendedor_carro = $row["cpf_vendedor"];
                $valor_carro = $row["valor"];
                $modelo_carro = $row["modelo"];
                $marca_carro = $row["marca"];
                $tipo_carro = $row["tipo"];
                $ano_carro = $row["ano"];
                $km_carro = $row["km"];
                $potencia_carro = $row["potencia"];
                $combustivel_carro = $row["combustivel"];
                $cambio_carro = $row["cambio"];
                $direcao_carro = $row["direcao"];
                $cor_carro = $row["cor"];
                $portas_carro = $row["portas"];
                $placa_carro = $row["placa"];
                $descricao_carro = $row["descricao"];
                $img1_carro = "./upload/".$row["img1"];
                $img2_carro = "./upload/".$row["img2"];
                $img3_carro = "./upload/".$row["img3"];
                $img4_carro = "./upload/".$row["img4"];
                $img5_carro = "./upload/".$row["img5"];
                $img6_carro = "./upload/".$row["img6"];
                $img7_carro = "./upload/".$row["img7"];
                $img8_carro = "./upload/".$row["img8"];
                $img9_carro = "./upload/".$row["img9"];
                $img10_carro = "./upload/".$row["img10"];
                $img11_carro = "./upload/".$row["img11"];
                }
            }
            mysqli_close($conn);#fecha o banco

            #pega os dados do vendedor
            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
            mysqli_select_db($conn, '$dbname');#seleciona o banco

            $sql_vend = "SELECT * FROM vendedor where cpf = $cpf_vendedor"; 
            $result = $conn->query($sql_vend);
            while($row_usuario = mysqli_fetch_assoc($result)){
                $nome_vendedor = $row_usuario["nome"];
                $cpf_vendedor = $row_usuario["cpf"];
                $fone_vendedor = $row_usuario["fone"];
                $email_vendedor = $row_usuario["email"];
                $cep_vendedor = $row_usuario["cep"];
                $estado_vendedor = $row_usuario["estado"];
                $cidade_vendedor = $row_usuario["cidade"];
                $endereco_vendedor = $row_usuario["endereco"];
                $numero_vendedor = $row_usuario["numero"];
                $complemento_vendedor = $row_usuario["complemento"];
            }
            mysqli_close($conn);#fecha o banco

            #Enviar os dados para a pessoa responsável pela negociação

            #ENVIO DE EMAIL PARA profissional da transaçcao
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "contato@eprivilegecar.com";
            $to = "contato@eprivilegecar.com"; #Colocar email de quem vai mexer com a negociação!!
            $subject = "Temos uma nova negociação a ser feita!";
            $message = "Olá <contact>, Segue os dados dos clientes para realizar a negociação: 
                        Informações do vendedor        Nome:  " . $nome_vendedor . 
                        "      CPF: " . $cpf_vendedor. 
                        "       Telefone: " . $fone_vendedor. 
                        "       Email: " . $email_vendedor. 
                        "       CEP: " . $cep_vendedor. 
                        "       Estado: " . $estado_vendedor. 
                        "       Cidade: " . $cidade_vendedor. 
                        "       Endereço: " . $endereco_vendedor. 
                        "       Num: " . $numero_vendedor. 
                        "       Complemento: " . $complemento_vendedor . 
                        "       Informações do comprador               Nome: " . $nome . 
                        "       CPF: " . $cpf . 
                        "       Telefone: " . $fone. 
                        "       Email: " . $email. 
                        "       CEP: " . $cep. 
                        "       Estado: " . $estado. 
                        "       Cidade: " . $cidade. 
                        "       Endereço: " . $endereco. 
                        "       Num: " . $numero. 
                        "       Complemento: " . $complemento .
                        "       Informações do carro            ID: ". $id_carro . 
                        "       Valor: " . $valor_carro . 
                        "       Modelo: " . $modelo_carro . 
                        "       Marca: " . $marca_carro . 
                        "       Tipo: " . $tipo_carro . 
                        "       Ano: " . $ano_carro . 
                        "       Km: ". $km_carro . 
                        "       Potencia: " . $potencia_carro . 
                        "       Combustivel: " . $combustivel_carro . 
                        "       Cambio: " . $cambio_carro . 
                        "       Direção: " . $direcao_carro . 
                        "       Cor: " . $cor_carro . 
                        "       Portas: " . $portas_carro . 
                        "       Placa: " . $placa_carro . 
                        "       Descrição: " . $descricao_carro;
            $headers = "From:" . $from;
            mail($to,$subject,$message, $headers);

        ?>
    </body>
</html>