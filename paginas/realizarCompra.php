<!DOCTYPE html>
<?php include "../config.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePrivilège CAR</title>
        <link rel="stylesheet" href="../css/cabecalho.css">
        <link rel="stylesheet" href="../css/rodape.css">
        <link rel="stylesheet" href="../css/formulario.css">
        <link rel="stylesheet" href="../css/comprar.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">





        <link rel="stylesheet" href="../cssnew/whatsapp.css">


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
          
          <div style="display: block;">
            <div class="w3-content" style="max-width:1200px">
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

            
            
            <img class="mySlides" src="../imagens/slogancarro3.jpg" style="width:100%;display:none">

            <div class="w3-row-padding w3-section">
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img1' style='width:100%;cursor:pointer;'onclick='currentDiv(1)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img2' style='width:100%;cursor:pointer;' onclick='currentDiv(2)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img3' style='width:100%;cursor:pointer;' onclick='currentDiv(3)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img4' style='width:100%;cursor:pointer;' onclick='currentDiv(4)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img5' style='width:100%;cursor:pointer;' onclick='currentDiv(5)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img6' style='width:100%;cursor:pointer;' onclick='currentDiv(6)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img7' style='width:100%;cursor:pointer;' onclick='currentDiv(7)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img8' style='width:100%;cursor:pointer;' onclick='currentDiv(8)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img9' style='width:100%;cursor:pointer;' onclick='currentDiv(9)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img10' style='width:100%;cursor:pointer;' onclick='currentDiv(10)'>"?>
              </div>
              <div class="w3-col s4" style="width:157.86px;max-height:100.98px;">
                <?php echo"<img class='demo w3-opacity w3-hover-opacity-off' src='$img11' style='width:100%;cursor:pointer;' onclick='currentDiv(11)'>"?>
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

          <div class="descricao" style="display: block;"> 
            
            <h1 class="descH1"> <br> <br> Descrição</h1>
            <h2 style="font-size: 28px; color:black;">
            <?php echo"Valor: R$". $valor .",00". "<br>"?>
            <?php echo"Modelo: ". $modelo. "<br>"?>
            <?php echo"Marca: ". $marca. "<br>"?>
            <?php echo"Tipo: ". $tipo. "<br>"?>
            <?php echo"Ano: ". $ano. "<br>"?>
            <?php echo"KM: ". $km."<br>"?>
            <?php echo"Potência: ". $potencia. "<br>"?>
            <?php echo"Combustível: ". $combustivel. "<br>"?>
            <?php echo"Câmbio: ". $cambio. "<br>"?>
            <?php echo"Direção: ". $direcao. "<br>"?>
            <?php echo"Cor: ". $cor. "<br>"?>
            <?php echo"Portas: ". $portas. "<br>"?>
            <?php echo"Numero final da placa: ". $placa. "<br>"?>
            <?php echo"Descrição: ". $descricao. "<br>"?>
            </h2>
          </div>

          <div class="informacoesZAP">
            <h3 style="text-align:center;">Quer mais informações ou tirar dúvidas? Nos chame no whatsapp!!</h3>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=5541995465020&text=Oi,%20tenho%20uma%20duvida!"><button class="botaoInfo" style="width: 40%; margin-left:30%">Whatsapp</button></a>
          </div>

            <div class="formulario">
                    <h1 style="color: black; font-size:28px">Preencha os requisitos e entraremos em contato com você em breve para a negociação.</h1>
                    <form form action="poscompra.php" method="post">
                      <label for="name"><br> Nome Completo:</label>
                      <input type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

                      <label for="cpf">CPF ou CNPJ:</label>
                      <input type="text" id="cpf" name="cpf" minlength="11" maxlength="14" required placeholder="ex: 00000000000">

                      <label for="fone">Fone:</label>
                      <input type="text" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">


                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required placeholder="ex: exemple@exemple.com">

                      <label for="cep">Cep:</label>
                      <input type="text" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

                      <label for="estado">Estado:</label>
                      <select id="estado" name="estado">
                        <option value="parana">Paraná</option>
                      </select>

                      <label for="cidade">Cidade:</label>
                      <input type="text" id="cidade" name="cidade" minlength="4" required placeholder="ex: curitiba">

                      <label for="endereco">Endereço:</label>
                      <input type="text" id="endereco" name="endereco" minlength="4" required placeholder="ex: Rua dos pinheiros">

                      <label for="num">Número:</label>
                      <input type="number" id="num" name="num" min="0" required placeholder="ex: 201">

                      <label for="comp">Complemento:</label>
                      <input type="text" id="comp" name="comp" minlength="4" required placeholder="ex: casa, bloco, apartamento...">

                      <label>
                        <input type="checkbox"   name="recebeEmail"> Aceitar receber noficações e novidades.
                      </label>
                      <br>
                      <label for="condicoes">
                        <input type="checkbox"  id="condicao" name="condicoes"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
                      </label>

                      <select style="display: none;" id="idcarro" name="id_carro">
                        <option value="<?php echo $id_carro?>"><?php echo $id_carro?></option>
                      </select>

                      <select style="display: none;" id="cpfvendedor" name="cpf_vendedor">
                        <option value="<?php echo $cpf_vendedor?>"><?php echo $cpf_vendedor?></option>
                      </select>
                      <a href="./poscompra.php?id=<?php echo $id_carro?>?>"><input type="submit"  value="Enviar"><!--onclick="validaFormVenda();"--></a>
                    </form>
                    <?php mysqli_close($conn);#fecha o banco?>
              </div>
            </div>
          </div>
        <?php require "./footer.php" ?>
      </div>
    </body>
</html>