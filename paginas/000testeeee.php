<!DOCTYPE html>
<?php include "../config.php"; ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>ePrivilegeCAR</title>
    <link rel="sortcut icon" href="./imagemnew/imgLogos/eprivilegecar.png" type="image/x-icon">

    <link rel="stylesheet" href="../cssnew/whatsapp.css">
    <link rel="stylesheet" href="../cssnew/realizarcompra.css">
    <link rel="stylesheet" href="../cssnew/headerFooter.css">

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
    <!---  http://localhost:8080/eprivilegecar2/paginas/000testeeee.php  -->

    <div class="parte1">
      <?php 
        $id_carro = $_GET['id']; 

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname); #conexao com o banco de dados
        mysqli_select_db($conn, '$dbname');#seleciona o banco

        $sql = "SELECT * FROM carro where id = $id_carro"; 
        $result = $conn->query($sql);
        if($result->num_rows>0){
          while($row = $result->fetch_assoc()){
            $id = $row["id"];
            $cpf_vendedor = $row["cpf_vendedor"];
            $valor = $row["valor"];
            $modelo = $row["modelo"];
            $marca = $row["marca"];
            $tipo = $row["tipo"];
            $ano = $row["ano"];
            $km = $row["km"];
            $potencia = $row["potencia"];
            $combustivel = $row["combustivel"];
            $cambio = $row["cambio"];
            $direcao = $row["direcao"];
            $cor = $row["cor"];
            $portas = $row["portas"];
            $placa = $row["placa"];
            $descricao = $row["descricao"];
            $img1 = "./upload/".$row["img1"];
            $img2 = "./upload/".$row["img2"];
            $img3 = "./upload/".$row["img3"];
            $img4 = "./upload/".$row["img4"];
            $img5 = "./upload/".$row["img5"];
            $img6 = "./upload/".$row["img6"];
            $img7 = "./upload/".$row["img7"];
            $img8 = "./upload/".$row["img8"];
            $img9 = "./upload/".$row["img9"];
            $img10 = "./upload/".$row["img10"];
            $img11 = "./upload/".$row["img11"];
          }
        }           
      ?>
      <div class="esquerda">

      <div class="imagemEsquerda">
        <?php echo"<img class='mySlides' src='$img1' style='width:100%;'>"?>
        <?php echo"<img class='mySlides' src='$img2' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img3' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img4' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img5' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img6' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img7' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img8' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img9' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img10' style='width:100%; display:none'>"?>
        <?php echo"<img class='mySlides' src='$img11' style='width:100%; display:none'>"?>

        <div class="superminiimg">
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img1' style='width:100%;cursor:pointer;'onclick='currentDiv(1)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img2' onclick='currentDiv(2)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img3' onclick='currentDiv(3)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img4' onclick='currentDiv(4)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img5' onclick='currentDiv(5)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img6' onclick='currentDiv(6)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img7' onclick='currentDiv(7)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img8' onclick='currentDiv(8)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img9' onclick='currentDiv(9)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img10' onclick='currentDiv(10)'>"?>
          </div>
          <div class="divminimg">
            <?php echo"<img class='imgseletor' src='$img11' onclick='currentDiv(11)'>"?>
          </div>
        </div>
      </div>
        <script>
        function currentDiv(n) {
          showDivs(slideIndex = n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
          }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
          }
        </script>
      </div>

      <div class="direita">
        <div class="dentrodireita">
          <h1 class="h1txt">Descrição</h1>
          <h2 class="h2txt">Código: <?php echo "$id" ?></h2>
          <h2 class="h2txt">Valor: <?php echo "R$ "."$valor".",00" ?></h2>
          <h2 class="h2txt">Modelo: <?php echo "$modelo" ?></h2>
          <h2 class="h2txt">Marca: <?php echo "$marca" ?></h2>
          <h2 class="h2txt">Categoria: <?php echo "$tipo" ?></h2>
          <h2 class="h2txt">Ano: <?php echo "$ano" ?></h2>
          <h2 class="h2txt">Quilometragem: <?php echo "$km" ?></h2>
          <h2 class="h2txt">Potencia: <?php echo "$potencia" ?></h2>
          <h2 class="h2txt">Combustível: <?php echo "$combustivel" ?></h2>
          <h2 class="h2txt">Câmbio: <?php echo "$cambio" ?></h2>
          <h2 class="h2txt">Direção: <?php echo "$direcao" ?></h2>
          <h2 class="h2txt">Portas: <?php echo "$portas" ?></h2>
          <h2 class="h2txt">Cor: <?php echo "$cor" ?></h2>
          <h2 class="h2txt">Numero da placa: <?php echo "$placa" ?></h2>
          <h2 class="h2txt" style="margin-bottom: 0px; border:none">Descrição: <?php echo "$descricao" ?></h2>
        </div>

        </div>
      </div>
    </div>

    <?php require "./footernew.php" ?>
  </body>
</html>