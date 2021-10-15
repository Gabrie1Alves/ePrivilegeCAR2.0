<!DOCTYPE html>
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
        
        




        <link rel="stylesheet" href="../cssnew/whatsapp.css">


        <script type="text/javascript" src="../javascript/validacoes.js"></script>
        <script type="text/javascript" src="../javascript/venda.js"></script>



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
            <div>
                <h1>Peencha os requisitos para vender seu carro, em breve entraremos em contato com você.</h1>
                <div class="formulario">
                    <form form action="posvender.php" method="POST">
                    <label for="fname"><b>Informações do usuário</b></label> <br>
                      <label for="name"> <br> Nome Completo:</label>
                      <input type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

                      <label for="cpf">CPF:</label>
                      <input type="text" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="ex: 00000000000">


                  
                      <label for="fone">Fone:</label>
                      <input type="text" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">


                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required placeholder="ex: qwerty@abcd.com">

                      <label for="cep">Cep:</label>
                      <input type="text" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

                      <label for="estado">Estado:</label>
                      <select id="estado" name="estado">
                        <option value="parana">Paraná</option>
                      </select>
                  
                      <label for="cidade">Cidade:</label>
                      <select id="cidade" name="cidade">
                        <option value="curitiba">Curitiba</option>
                      </select>

                      <label for="endereco">Endereço:</label>
                      <input type="text" id="endereco" name="endereco" minlength="5" required placeholder="ex: Rua dos pinheiros">

                      <label for="num">Número:</label>
                      <input type="number" id="num" name="num" min="0" required placeholder="ex: 201">

                      <label for="comp">Complemento:</label>
                      <input type="text" id="comp" name="comp" minlength="4" required placeholder="ex: casa, bloco, apartamento...">

                      <label>
                        <input type="checkbox"  name="recebeEmail"> Aceitar receber noficações e novidades.
                      </label>
                      <br>
                      <label for="condicoes">
                        <input type="checkbox" checked id="cond" name="cond"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
                      </label>
                      
                    <a href="./posvender.php" ><input type="submit"   value="Enviar"></a>
                      
                    </form>
                  </div>
</div>
            <?php require "./footer.php" ?>
        </div>

    </body>
</html>