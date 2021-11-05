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
        <div id="corpo-prod"> 
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
                    $semDesconto = array();
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
                        $semDesconto[$i] = $valor[$i] * 1.0473;
                        ?>
                        <a href="./realizarCompra.php?id=<?php echo $id_carro[$i]?>">
                            <div class="produto">
                                <?php echo"<img class='img' src='$caminho_img' alt='Carro'>"?>

                                <h1 class="titulo-prod">Marca: <span class="resp-prod"><?php echo $marca[$i]?></span></h1>

                                <h1 class="titulo-prod">Modelo: <span class="resp-prod"><?php echo $modelo[$i]?></span></h1>

                                <h1 class="titulo-prod">Categoria: <span class="resp-prod"><?php echo $tipo[$i]?></span></h1>

                                <h1 class="titulo-prod">Ano: <span class="resp-prod"><?php echo $ano[$i]?></span></h1>

                                <h1 class="titulo-prod">Km: <span class="resp-prod"><?php echo $km[$i]?></span></h1>

                                <h1 class="titulo-prod">De: <span class="resp-prod desconto"><?php echo $semDesconto[$i] . " R$"?></span></h1>

                                <h1 class="titulo-prod">Por: <span class="resp-prod simbolo"><?php echo $valor[$i] . " R$"?></span></h1>
                            </div>   
                        </a>
                        <?php
                        $i++;
                    }
                }
            ?>
        </div>
        <?php mysqli_close($conn);#fecha o banco?>
        <?php require "./footernew.php" ?> 
    </body>
</html>