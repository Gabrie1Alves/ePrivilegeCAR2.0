<!DOCTYPE html>
<?php include "../config.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePrivilegeCAR</title>
        <link rel="sortcut icon" href="./imagemnew/imgLogos/eprivilegecar.png" type="image/x-icon">
        <link rel="stylesheet" href="../cssnew/whatsapp.css">
        <link rel="stylesheet" href="../cssnew/headerFooter.css">
        <link rel="stylesheet" href="../cssnew/comprar.css">

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
            
        <?php require "./headnew.php" ?> 
        <?php require "./whatsapp.php" ?>
<!--
        <div class="comprar">
                
            <?php /*
                $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
                mysqli_select_db($conn, '$dbname');#seleciona o banco

                $sql = 'SELECT id,cpf_vendedor,valor, modelo, marca, km, img1 FROM carro ';#WHERE vendido = 0
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
*/          ?>
            <?php #mysqli_close($conn);#fecha o banco?>
        </div>
-->

        <div class="parte1">
            <h1 class="parte1h1 a">
                Imagem
            </h1>
            <h1 class="parte1h1 b">
                Código
            </h1>
            <h1 class="parte1h1 c">
                Marca
            </h1>
            <h1 class="parte1h1 d">
                Modelo
            </h1>
            <h1 class="parte1h1 e">
                Categoria
            </h1>
            <h1 class="parte1h1 f">
                Ano
            </h1>
            <h1 class="parte1h1 g">
                Km
            </h1>
            <h1 class="parte1h1 h" style="border: none;">
                Valor
            </h1>
        </div>
        <hr style="width: 100%; color:white">
        <?php
            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
            mysqli_select_db($conn, '$dbname');#seleciona o banco

            $sql = 'SELECT id,cpf_vendedor,valor, modelo, marca, km, img1, tipo, ano FROM carro ';/*WHERE vendido = 0*/
            if($res = mysqli_query($conn,$sql)){
                $cpf_vendedor = array();
                $img = array();
                $id_carro = array();
                $modelo = array();
                $marca = array();
                $km = array(); ##QUILOMETRAGEM
                $valor = array();
                $tipo = array();
                $ano = array();
                
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
                    $tipo[$i] = $reg['tipo'];
                    $ano[$i] = $reg['ano'];

                    ?>
                    <a href="./realizarCompra.php?id=<?php echo $id_carro[$i]?>">
                        <div class="parte2Produto">
                            <h1 class="parte2img a">
                            <?php echo"<img style='height:100px' src='$caminho_img' alt='Carro'>"?>
                            </h1>
                            <h1 class="parte2h1 b">
                            <?php echo $id_carro[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 c">
                            <?php echo $marca[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 d">
                            <?php echo $modelo[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 e">
                            <?php echo $tipo[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 f">
                            <?php echo $ano[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 g">
                            <?php echo $km[$i]?> <br>
                            </h1>
                            <h1 class="parte2h1 h" style="border: none;">
                            <?php echo $valor[$i]?> <br>
                            </h1>
                        </div>
                    </a>
                    <hr style="width: 100%; color:white">
                    <?php
                    $i++;
                }
            }
        ?>
    <?php mysqli_close($conn);#fecha o banco?>
    </div>
    <?php require "./footernew.php" ?> 
    </body>
</html>