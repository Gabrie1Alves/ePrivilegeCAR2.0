<!DOCTYPE html>
<?php include "../config.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePrivilegeCAR</title>
        <link rel="sortcut icon" href="./imagemnew/imgLogos/eprivilegecar.png" type="image/x-icon">
        <link rel="stylesheet" href="../cssnew/whatsapp.css">
        <link rel="stylesheet" href="../cssnew/headerFooter.css">
        <link rel="stylesheet" href="../cssnew/teste.css">

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
      <div class="separa"></div>

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
            $valorAlto = array();
            
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
              $valorAlto[$i] = $valor[$i] * 1.067;

              ?>
                <a href="./realizarCompra.php?id=<?php echo $id_carro[$i]?>">
                    <div class="parte2Produto" style="display: none;">
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
                
                    <div class="produto">
                      <a href="./realizarCompra.php?id=<?php echo $id_carro[$i]?>">
                        <?php echo"<img style='width:100%; height:45%' src='$caminho_img' alt='Carro'>"?>
                      
                        <h1 class="h1p">
                          <?php echo "Marca: " . $marca[$i]?> <br>
                        </h1>
                        <h1 class="h1p">
                          <?php echo "Modelo: " . $modelo[$i]?> <br>
                        </h1>
                        <h1 class="h1p">
                          <?php echo "Ano: " . $ano[$i]?> <br>
                        </h1>
                        <h1 class="h1p">
                          <?php echo "KM: ".  $km[$i]?> <br>
                        </h1>
                        <h1 class="h1p">
                          <?php echo "De: " . "R$ " . "<span class='txtdec'>$valorAlto[$i],00</span>"?> <br>
                        </h1>
                        <h1 class="h1p">
                          <?php echo "Por: " . "R$" . $valor[$i] . ",00"?> <br>
                          
                        </h1>
                      </a>
                    </div>
                
                <?php
                $i++;
            }
          }
        ?>
    <?php mysqli_close($conn);#fecha o banco?>
    </div>
    <div class="separa"></div>
    <?php require "./footernew.php" ?> 
    </body>
</html>