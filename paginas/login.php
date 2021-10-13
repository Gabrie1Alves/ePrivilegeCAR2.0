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
        
        

        <link rel="stylesheet" href="../cssnew/whatsapp.css">


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
        <script type="text/javascript" src="../javascript/validacoes.js"></script>
    </head>
    <body>
        <div class="container">

        <?php require "./head.php" ?>
        <?php require "./whatsapp.php" ?>
            <div class="login">
                <form action="/action_page.php" method="post">
                    <div class="imgcontainer">
                      <img src="../carrosIMG/logoPadrao.jpg" alt="Avatar" class="avatar">
                    </div>
                  
                    <div class="container">
                      <label for="email" style="margin-left: 10px;"><b>Email:</b></label>
                      <input type="text" placeholder="exemple@exemple.exemple" name="email" required>
                  
                      <label for="psw" style="margin-left: 10px;"><b>Senha:</b></label>
                      <input type="password" placeholder="************" name="psw" required>
                          
                      <button type="submit" value="Enviar">Login</button>

                    </div>

                    <div class="container">
                        <span class="psw"><a href="#">Recuperar senha?</a></span>
                      </div>
                </form>
                <a href="./criarconta.php"><button type="submit">Não tem uma conta? Crie uma clicando aqui!</button></a>
                <br><br><br>
            </div>
            
    
            <?php require "./footer.php" ?>
        </div>

    </body>
</html>