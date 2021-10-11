<!DOCTYPE html>
<?php include "../config.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePrivilège CAR</title>
        <link rel="stylesheet" href="../css/cabecalho.css">
        <link rel="stylesheet" href="../css/buscas.css">
        <link rel="stylesheet" href="../css/comoFunciona.css">
        <link rel="stylesheet" href="../css/rodape.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/formulario.css">
        <link rel="stylesheet" href="../css/comprar.css">
        <link rel="stylesheet" href="../css/whats.css">

        <script type="text/javascript" src="../javascript/validacoes.js"></script>

        <!-- TAG INICIO -->
        <meta name="description" content="ePRIVILÈGE CAR concessionária digital; B2B; Concessionária digital; Revenda de carros; Repasse; Venda seu carro;" />
            <link rel="canonical" href="https://eprivilegecar.com" />
            <meta property="og:locale" content="pt_PT" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="ePRIVILÈGE CAR - Concessionária digital" />
            <meta property="og:description" content="ePRIVILÈGE CAR concessionária digital; B2B; Concessionária digital; Revenda de carros; Repasse; Venda seu carro;" />
            <meta property="og:url" content="https://eprivilegecar.com" />
            <meta property="og:site_name" content="ePRIVILÈGE CAR" />
            <meta property="og:image" content="https://eprivilegecar.com/imagens/comovender3.jpg" />
        <!-- TAG FIM-->
    </head>
    <body>
        <div class="container">
            
            <?php require "./head.php" ?> 
            <?php require "./whatsapp.php" ?>
            <div class="comprar">
                
                <hr color="black">

                
                <?php
                    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
                    mysqli_select_db($conn, '$dbname');#seleciona o banco

                    $sql = 'SELECT id,cpf_vendedor,valor, modelo, marca, km, img1 FROM carro ';/*WHERE vendido = 0*/
                    if($res = mysqli_query($conn,$sql)){
                        $cpf_vendedor = array();
                        $img = array();
                        $id_carro = array();
                        $modelo = array();
                        $marca = array();
                        $km = array(); ##QUILOMETRAGEM
                        $valor = array();
                        $i = 0;
                        while($reg = mysqli_fetch_assoc($res)){
                            $cpf_vendedor[$i] = $reg['cpf_vendedor'];
                            $img[$i] = $reg['img1'];
                            $id_carro[$i] = $reg['id'];
                            $modelo[$i] = $reg['modelo'];
                            $marca[$i] = $reg['marca'];
                            $valor[$i] = $reg['valor'];
                            $km[$i] = $reg['km'];
                            $caminho_img = "./upload/".$img[$i]; 

                            ?>
                            
                            <div class="produto">
                                <?php echo"<img class='imagemP' src='$caminho_img' alt=''>"?>
                                <img class="imagemP" src="$caminho_img" alt="">
                                <h3 id="produtoh3">
                                    Marca: <?php echo $marca[$i]?> <br>
                                    Modelo: <?php echo $modelo[$i]?> <br>
                                    KM: <?php echo $km[$i]?> <br>
                                    Valor: R$<?php echo $valor[$i]?> <br>
                                </h3>
                                <a href="./realizarCompra.php?id=<?php echo $id_carro[$i]?>"><button  class="buttonComprar">Ver detalhes >></button></a>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                ?>
            <?php mysqli_close($conn);#fecha o banco?>
            </div>
            
    
            <?php require "./footer.php" ?> 
        </div>

    </body>
</html>