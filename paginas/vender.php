<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ePrivilegeCAR</title>
    <link rel="sortcut icon" href="./imagemnew/imgLogos/eprivilegecar.png" type="image/x-icon">

    <link rel="stylesheet" href="../cssnew/whatsapp.css">
    <link rel="stylesheet" href="../cssnew/vender.css">
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

    <div class="container-cinza">
      <div class="divide-em-duas-partes">
        <div class="esquerda centraliza">
          <h1 id="frase-intonacao">Como vender seu carro com a gente? <br> É muito simples!</h1>
        </div>
        <div class="direita direita-mobile" style="padding-bottom:0px; margin-bottom:-5px;">
          <img src="../imagemnew/vender/carrodefrente.png" alt="" id="carro-inicio">
        </div>
      </div>
    </div>

    <div class="container-azul">
      <div class="divide-em-duas-partes">
        <div class="esquerda "><!--centraliza--> 
          <h1 class="h1-titulos">Como funciona?</h1>
          <h3 class="h3-conteudos" style="color: white;">Agende uma avaliação online de onde estiver e sem compromisso, nós iremos na sua casa ou onde desejar para 
            realizar a vistoria do seu carro. Em menos de 24 horas te apresentaremos a melhor proposta, ofertada por nossos parceiros espalhados por todo o Brasil. <br> 
            Caso você aceite a proposta resolveremos toda a burocracia para você e o melhor de tudo: o pagamento é realizado à vista sem enrolação!</h3>
        </div>
        <div class="direita centraliza">
          <h1 class="h1-titulos">Vamos nessa?</h1>
          <h3 class="h3-conteudos" style="color: white;">Basta preencher o formulário abaixo e em seguida, entraremos em contato com você.</h3> <br>

          <form form action="posvender.php" method="POST">
            <label class="label-form" for="name"> Nome Completo:</label> <br>
            <input class="input-form" type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

            <label class="label-form" for="cpf"> <br>CPF:</label> <br>
            <input class="input-form" type="number" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="ex: 00000000000">

            <label class="label-form" for="fone"> <br>Fone:</label> <br>
            <input class="input-form" type="number" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">

            <label class="label-form" for="email"> <br>Email:</label> <br>
            <input class="input-form" type="email" id="email" name="email" required placeholder="ex: qwerty@abcd.com">

            <label class="label-form" for="cep"> <br>Cep:</label> <br>
            <input class="input-form" type="number" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

            <label> <br>
              <input type="checkbox"  name="recebeEmail"> Aceitar receber noficações e novidades.
            </label> <br>
            
            <label for="condicoes">
              <input type="checkbox" checked id="cond" name="cond"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
            </label> <br> <br>
            <a class="abtn" href="./posvender.php" ><input class="btn h1-btn" type="submit"    value="Enviar"></a>
          </form>
        </div>
      </div>
    </div>
    <?php require "./footernew.php" ?>
  </body>
</html>