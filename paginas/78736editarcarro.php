<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePrivilegeCAR</title>
        <link rel="sortcut icon" href="./imagemnew/imgLogos/eprivilegecar.png" type="image/x-icon">

        <link rel="stylesheet" href="../cssnew/whatsapp.css">
        <link rel="stylesheet" href="../cssnew/formularios-func.css">
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

        <h1 class="h1-formulario" style="margin-top: 30px;">Preencha as informações corretamente, para editar o carro!</h1>

        <form enctype = "multipart/form-data" form action="78736poseditarcarro.php" method="POST" >
        <label for="ID">  <b>Digite o ID do carro que deseja atualizar as informações! <br><br>  <span style="color: red;">ID do carro:</span></b></label> <br> <br>
        <input class="input-txt id-carro-input" type="text" id="ID" name="ID" required placeholder="ex: 2">
         
         
        <hr style="background-color:red"> <br> <br>
         
         
        <label for="valor"><h2>Valor do carro:</h2></label>
        <input class="input-txt" type="text" id="valor" name="valor" required placeholder="ex: 80700,99"> <br> <br>

        <label for="mod"><h2>Modelo:</h2></label>
        <input class="input-txt" type="text" id="mod" name="mod" required placeholder="ex: ka"> <br> <br>

        <label for="marca"><h2>Marca:</h2></label>
        <input class="input-txt" type="text" id="marca" name="marca" required placeholder="ex: ford"> <br> <br>

        <label for="tipo"><h2>Tipo de veículo:</h2></label>
        <input class="input-txt" type="text" id="tipo" name="tipo" required placeholder="ex: pick-up"> <br> <br>

        <label for="Ano"><h2>Ano:</h2></label>
        <input class="input-txt"type="text" id="ano" name="ano" required placeholder="ex: 2018"> <br> <br>

        <label for="km"><h2>Quilometragem:</h2></label>
        <input class="input-txt" type="text" id="km" name="km" required placeholder="ex: 80700"> <br> <br>

        <label for="potencia"><h2>Potencia do motor:</h2></label>
        <input class="input-txt" type="text" id="potencia" name="potencia" required placeholder="ex: 1.6"> <br> <br>

        <label for="combustivel"><h2>Combustivel:</h2></label>
        <input class="input-txt" type="text" id="combustivel" name="combustivel" required placeholder="ex: flex"> <br> <br>

        <label for="cambio"><h2>Cambio:</h2></label>
        <input class="input-txt" type="text" id="cambio" name="cambio" required placeholder="ex: manual"> <br> <br>

        <label for="direcao"><h2>Direção:</h2></label>
        <input class="input-txt" type="text" id="direcao" name="direcao" required placeholder="ex: hidráulica"> <br> <br>

        <label for="cor"><h2>Cor:</h2></label>
        <input class="input-txt" type="text" id="cor" name="cor" required placeholder="ex: branco"> <br> <br>

        <label for="porta"><h2>Portas:</h2></label>
        <input class="input-txt" type="text" id="porta" name="porta" required placeholder="ex: 4"> <br> <br>

        <label for="placa"><h2>Final da placa:</h2></label>
        <input class="input-txt" type="text" id="placa" name="placa" required placeholder="ex: 1"> <br> <br>

        <label for="desc"><h2>Descricao:</h2></label>
        <input class="input-txt" type="text" id="desc" name="desc" required placeholder="ex: arranhão no capô... caso não tenha nada, coloque: nenhum defeito"> <br>
        <br>
        <label for="img1"><h2>Imagem 1 - De frente 3/4:</h2></label> <br>
        <input class="input-img" type="file" id="img1" name="img1" required placeholder="Coloque a imagem 1 aqui">
        <br>
        <br>
        <label for="img2"><h2>Imagem 2 - De frente plana:</h2></label> <br>
        <input class="input-img" type="file" id="img2" name="img2" required placeholder="Coloque a imagem 2 aqui">
        <br>
        <br>
        <label for="img3"><h2>Imagem 3 - Motor:</h2></label> <br>
        <input class="input-img" type="file" id="img3" name="img3" required placeholder="Coloque a imagem 3 aqui">
        <br>
        <br>
        <label for="img4"><h2>Imagem 4 - Painel:</h2></label> <br>
        <input class="input-img" type="file" id="img4" name="img4" required placeholder="Coloque a imagem 4 aqui">
        <br>
        <br>
        <label for="img5"><h2>Imagem 5 - Interior banco da frente:</h2></label> <br>
        <input class="input-img" type="file" id="img5" name="img5" required placeholder="Coloque a imagem 5 aqui">
        <br>
        <br>
        <label for="img6"><h2>Imagem 6 - Interior banco de trás:</h2></label> <br>
        <input class="input-img" type="file" id="img6" name="img6" required placeholder="Coloque a imagem 6 aqui">
        <br>
        <br>
        <label for="img7"><h2>Imagem 7 - Lateral direita:</h2></label> <br>
        <input class="input-img" type="file" id="img7" name="img7" required placeholder="Coloque a imagem 7 aqui">
        <br>
        <br>
        <label for="img8"><h2>Imagem 8 - Lateral esquerda:</h2></label> <br>
        <input class="input-img" type="file" id="img8" name="img8" required placeholder="Coloque a imagem 8 aqui">
        <br>
        <br>
        <label for="img9"><h2>Imagem 9 - Rodas:</h2></label> <br>
        <input class="input-img" type="file" id="img9" name="img9" required placeholder="Coloque a imagem 9 aqui">
        <br>
        <br>
        <label for="img10"><h2>Imagem 10 - Porta malas:</h2></label> <br>
        <input class="input-img" type="file" id="img10" name="img10" required placeholder="Coloque a imagem 10 aqui">
        <br>
        <br>
        <label for="img11"><h2>Imagem 11 - Traseira 3/4:</h2></label> <br>
        <input class="input-img" type="file" id="img11" name="img11" required placeholder="Coloque a imagem 11 aqui">
        <br>
        <br>
         
         
        <input class="btn-enviar" type="submit"  value="Enviar"><!--onclick="validaFormVenda();"-->
        </form>
        
    </body>
</html>



