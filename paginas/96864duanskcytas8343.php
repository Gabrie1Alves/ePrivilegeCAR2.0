<?php include "../config.php"; ?>
<html>
    <body>
        <?php
        #recebe valores da URL e salva nas variaveis
        $cpf = $_POST["cpf"];
        $valor = $_POST["valor"];
        $modelo = $_POST["mod"];
        $marca = $_POST["marca"];
        $tipo = $_POST["tipo"];
        $ano = $_POST["ano"];
        $km = $_POST["km"];
        $pot = $_POST["potencia"];
        $comb = $_POST["combustivel"];
        $cambio = $_POST["cambio"];
        $direcao = $_POST["direcao"];
        $cor = $_POST["cor"];
        $porta = $_POST["porta"];
        $placa = $_POST["placa"];
        $desc = $_POST["desc"];

        #Diretorio up
        $diretorio = "upload/";

        #verifica se os arquivos foram enviados
        if(isset($_FILES['img1'])){
            $extensao1 = strtolower(substr($_FILES['img1']['name'], -4));
            $novo_nome1 = md5(time()).$extensao1;
            move_uploaded_file($_FILES['img1']['tmp_name'], $diretorio.$novo_nome1);     
        }
        sleep(1);
        if(isset($_FILES['img2'])){
            $extensao2 = strtolower(substr($_FILES['img2']['name'], -4));
            $novo_nome2 = md5(time()).$extensao2;
            move_uploaded_file($_FILES['img2']['tmp_name'], $diretorio.$novo_nome2);
        }
        sleep(1);
        if(isset($_FILES['img3'])){
            $extensao3 = strtolower(substr($_FILES['img3']['name'], -4));
            $novo_nome3 = md5(time()).$extensao3;
            move_uploaded_file($_FILES['img3']['tmp_name'], $diretorio.$novo_nome3);
        }
        sleep(1);
        if(isset($_FILES['img4'])){
            $extensao4 = strtolower(substr($_FILES['img4']['name'], -4));
            $novo_nome4 = md5(time()).$extensao4;
            move_uploaded_file($_FILES['img4']['tmp_name'], $diretorio.$novo_nome4);
        }
        sleep(1);
        if(isset($_FILES['img5'])){
            $extensao5 = strtolower(substr($_FILES['img5']['name'], -4));
            $novo_nome5 = md5(time()).$extensao5;
            move_uploaded_file($_FILES['img5']['tmp_name'], $diretorio.$novo_nome5);
        }
        sleep(1);
        if(isset($_FILES['img6'])){
            $extensao6 = strtolower(substr($_FILES['img6']['name'], -4));
            $novo_nome6 = md5(time()).$extensao6;
            move_uploaded_file($_FILES['img6']['tmp_name'], $diretorio.$novo_nome6);
        }
        sleep(1);
        if(isset($_FILES['img7'])){
            $extensao7 = strtolower(substr($_FILES['img7']['name'], -4));
            $novo_nome7 = md5(time()).$extensao7;
            move_uploaded_file($_FILES['img7']['tmp_name'], $diretorio.$novo_nome7);
        }
        sleep(1);
        if(isset($_FILES['img8'])){
            $extensao8 = strtolower(substr($_FILES['img8']['name'], -4));
            $novo_nome8 = md5(time()).$extensao8;
            move_uploaded_file($_FILES['img8']['tmp_name'], $diretorio.$novo_nome8);
        }
        sleep(1);
        if(isset($_FILES['img9'])){
            $extensao9 = strtolower(substr($_FILES['img9']['name'], -4));
            $novo_nome9 = md5(time()).$extensao9;
            move_uploaded_file($_FILES['img9']['tmp_name'], $diretorio.$novo_nome9);
        }
        sleep(1);
        if(isset($_FILES['img10'])){
            $extensao10 = strtolower(substr($_FILES['img10']['name'], -4));
            $novo_nome10 = md5(time()).$extensao10;
            move_uploaded_file($_FILES['img10']['tmp_name'], $diretorio.$novo_nome10);
        }
        sleep(1);
        if(isset($_FILES['img11'])){
            $extensao11 = strtolower(substr($_FILES['img11']['name'], -4));
            $novo_nome11 = md5(time()).$extensao11;
            move_uploaded_file($_FILES['img11']['tmp_name'], $diretorio.$novo_nome11);
        }
        sleep(1);



        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco

        $img = "INSERT INTO carro(cpf_vendedor, valor, modelo, marca, tipo, ano, km, potencia, combustivel, cambio, direcao, cor, portas, placa, descricao, img1, img2, img3, img4, img5, img6, img7, img8, img9, img10, img11) VALUES
            ('$cpf','$valor','$modelo','$marca','$tipo','$ano','$km','$pot','$comb','$cambio','$direcao','$cor', '$porta','$placa','$desc','$novo_nome1','$novo_nome2','$novo_nome3','$novo_nome4','$novo_nome5','$novo_nome6','$novo_nome7','$novo_nome8','$novo_nome9','$novo_nome10','$novo_nome11')";
        if(mysqli_query($conn, $img)){ 
            echo "<script>alert('Os dados foram salvos no banco!');</script>";
        } else {#se nao der faz isso
            echo "Falha ao salvar os dados:" .mysqli_error($conn);
        }
        mysqli_close($conn);#fecha o banco
        


        sleep(3);
        #Pegar a pagina do carro com suas informações
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco
        $sql_carro = "SELECT * FROM carro where cpf_vendedor = $cpf and km = $km"; 
        $result = $conn->query($sql_carro);
        while($row_carro = mysqli_fetch_assoc($result)){
            $id = $row_carro["id"];
        }
        mysqli_close($conn);#fecha o banco

        $link = "https://eprivilegecar.com/paginas/realizarCompra.php?id=".$id;
        $from = "contato@eprivilegecar.com";
        $to = "contato@eprivilegecar.com"; #Colocar email de quem vai mexer com a negociação!!
        $subject = "Temos uma nova oferta em nosso site! Divulgue nos grupos!";
        $message = "Ola, segue os dados da nossa nova oferta". 
                    "Informações do carro" . 
                    "   ID: " . $id . 
                    "   Valor: ". $valor . 
                    "   Modelo: " . $modelo . 
                    "   Marca: " . $marca . 
                    "   Tipo: " . $tipo . 
                    "   Ano: " . $ano . 
                    "   Km: " . $km . 
                    "   Potencia: " . $pot . 
                    "   Combustivel: " . $comb . 
                    "   Cambio: " . $cambio . 
                    "   Direção: " . $direcao . 
                    "   Cor: " . $cor . 
                    "   Portas: " . $porta . 
                    "   Placa: " . $placa . 
                    "   Descrição: " . $desc . 
                    "   LINK: " . $link . 
                    "   _________________________NAO ENVIAR AOS GRUPOS: CPF/CNPJ_vendedor: " . $cpf;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);

        echo "<script>alert('Os dados foram salvos!'); window.location = '../default.php'</script>";
    ?>
    </body>

</html>