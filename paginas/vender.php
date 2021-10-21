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

    <div class="parte1">
      <div class="parte1txt">
        <h1 class="parte1H1">Como vender seu carro com a gente? <br> <span style="color: #ff4700;">É muito Simples!</span></h1>
      </div>
      <div class="parte1divimg">
        <img class="parte1img" src="../imagemnew/vender/silverAudiSemFundo.png" alt="Silver Audi">
      </div>
    </div>
<!--
    <h1 class="parte2h1titulo"><span class="parte2titulo">Como funciona?</span></h1>
    <div class="parte2">
      <div class="parte2e">
        <img class="parte2img" src="../imagemnew/vender/mulherComCelularSemFundo.png" alt="">
      </div>
      <div class="parte2d">
        <p class="parte2txt">
          Agende uma avaliação online de onde estiver e sem compromisso, nós iremos na sua casa ou onde desejar para realizar a vistoria do seu carro. 
          Em menos de 24 horas te apresentaremos a melhor proposta, ofertada por nossos parceiros espalhados por todo o Brasil. <br> <br>
          Caso você aceite a proposta resolveremos toda a burocracia para você e o melhor de tudo: o pagamento é realizado à vista sem enrolação!
        </p>
      </div>
    </div>
-->
    <div class="parte4">
      <div class="parte4CF">
        <h1 class="parte4H1">Como funciona?</h1>
        <h2 class="parte4H2">
          Agende uma avaliação online de onde estiver e sem compromisso, nós iremos na sua casa ou onde desejar para realizar a vistoria do seu carro. 
          Em menos de 24 horas te apresentaremos a melhor proposta, ofertada por nossos parceiros espalhados por todo o Brasil. <br> <br>
          Caso você aceite a proposta resolveremos toda a burocracia para você e o melhor de tudo: o pagamento é realizado à vista sem enrolação!
        </h2>
      </div>
      <div class="parte4FORM">
        <h1 class="parte3h1a">Vamos nessa?</h1>
        <h1 class="parte3h1b">Basta preencher o formulário abaixo e entraremos em contato com você!</h1>

        <form form action="posvender.php" method="POST">
        <label for="name"> <br> Nome Completo:</label> <br>
        <input class="parte3input" type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

        <label for="cpf"> <br>CPF:</label> <br>
        <input class="parte3input" type="text" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="ex: 00000000000">

        <label for="fone"> <br>Fone:</label> <br>
        <input class="parte3input" type="text" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">

        <label for="email"> <br>Email:</label> <br>
        <input class="parte3input" type="email" id="email" name="email" required placeholder="ex: qwerty@abcd.com">

        <label for="cep"> <br>Cep:</label> <br>
        <input class="parte3input" type="text" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

        <label> <br>
          <input type="checkbox"  name="recebeEmail"> Aceitar receber noficações e novidades.
        </label>
        <br>
        <label for="condicoes">
          <input type="checkbox" checked id="cond" name="cond"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
        </label> <br>
        <a class="parte4a" href="./posvender.php" ><input class="botao" type="submit"   value="Enviar"></a>
      </form>
        
      </div>
    </div>
<!--
    <div class="parte3">
      <h1 class="parte3h1a">Vamos nessa?</h1>
      <h1 class="parte3h1b">Basta preencher o formulário abaixo e entraremos em contato com você!</h1>

      <form form action="posvender.php" method="POST">
        <label for="name"> <br> Nome Completo:</label> <br>
        <input class="parte3input" type="text" id="name" name="name" minlength="7" required placeholder="ex: João da Silva Medeiros">

        <label for="cpf"> <br>CPF:</label> <br>
        <input class="parte3input" type="text" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="ex: 00000000000">

        <label for="fone"> <br>Fone:</label> <br>
        <input class="parte3input" type="text" id="fone" name="fone" minlength="11" maxlength="11" required placeholder="ex: 41900000000">

        <label for="email"> <br>Email:</label> <br>
        <input class="parte3input" type="email" id="email" name="email" required placeholder="ex: qwerty@abcd.com">

        <label for="cep"> <br>Cep:</label> <br>
        <input class="parte3input" type="text" id="cep" name="cep" minlength="8" maxlength="8" required placeholder="ex: 00000000">

        <label for="estado"> <br>Estado:</label> <br>
        <input class="parte3input" type="text" id="estado" name="estado" required placeholder="ex: Parana">

        <label for="cidade"> <br>Cidade:</label> <br>
        <input class="parte3input" type="text" id="cidade" name="cidade" required placeholder="ex: Parana">

        <label for="endereco"> <br>Endereço:</label> <br>
        <input class="parte3input" type="text" id="endereco" name="endereco" minlength="5" required placeholder="ex: Rua dos pinheiros">

        <label for="num"> <br>Número:</label> <br>
        <input class="parte3input" type="number" id="num" name="num" min="0" required placeholder="ex: 201">

        <label for="comp"> <br>Complemento:</label> <br>
        <input class="parte3input" type="text" id="comp" name="comp" minlength="4" required placeholder="ex: casa, bloco, apartamento...">

        <label> <br>
          <input type="checkbox"  name="recebeEmail"> Aceitar receber noficações e novidades.
        </label>
        <br>
        <label for="condicoes">
          <input type="checkbox" checked id="cond" name="cond"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os <a style="color: black;" href="./06politicadosite.php">TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE</a>.
        </label> <br>
        <a href="./posvender.php" ><input class="botao" type="submit"   value="Enviar"></a>
      </form>
    </div>
-->




    <?php require "./footernew.php" ?>
  </body>
</html>