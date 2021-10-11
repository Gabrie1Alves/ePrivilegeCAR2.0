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
        <link rel="stylesheet" href="../css/login.css">
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
            <div class="login">
                <div class="imgcontainer">
                    <img src="../carrosIMG/logoPadrao.jpg" alt="Avatar" class="avatar">
                  </div>
                <form  > <!--action="/action_page.php"  method="post"-->
                  
                    <div class="formulario">
                      <label for="nome"><b>Nome completo:</b></label>
                      <input type="text" id="name" placeholder="ex: João da Silva Medeiros" name="nome" required>

                      <label for="email"><b> <br> Email: <br></b></label>
                      <input type="text" id="email" placeholder="exemplo@algo.algo" name="email" required>
                  
                      <label for="senha1"><b> <br> Senha: <br> </b></label>
                      <input type="password" id="senha1" placeholder="**********" name="senha1" required>

                      <label for="senha2"><b> <br> Digite sua senha novamente:<br></b></label>
                      <input type="password" id="senha2" placeholder="**********" name="senha2" required>

                      <label for="estado"><b> <br> Estado:<br></b></label> 
                      <select id="estado" name="estado">
                        <option value="parana">Paraná</option>
                      </select>

                      <label for="cidade"><b><br>Cidade:<br></b></label>
                      <select id="cidade" name="cidade">
                        <option value="curitiba">Curitiba</option>
                      </select>

                      <label for="fone"><b><br>Fone:<br></b></label>
                      <input type="text" id="fone" placeholder="ex: 41 9 00000000" name="fone" required>

                      <label for="cpf"><b><br>CPF:<br></b></label>
                      <input type="text" id="cpf" placeholder="ex: 00000000000" name="cpf" required>
                      <br>
                      <label>
                        <input type="checkbox" checked="checked"  name="condicoes"> Aceitar receber noficações e novidades.<br>
                      </label>
                      <br>
                      <label for="condicoes">
                        <input type="checkbox" checked="checked" id="condicao" name="condicoes"> Ao clicar no botão abaixo declaro estar ciente e de acordo com os TERMOS E CONDIÇÕES DE USO e POLÍTICA DE PRIVACIDADE.<br>
                      </label>

                      <button type="submit" onclick="validaConta();" value="Enviar">Criar conta</button>

                    </div>

                </form>
            </div>
            
    
            <?php require "./footer.php" ?>
        </div>

    </body>
</html>