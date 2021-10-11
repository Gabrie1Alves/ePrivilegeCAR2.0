<?php include "../config.php"; ?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/buscas.css">
    <link rel="stylesheet" href="../css/comoFunciona.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/whats.css">
    <?php require "./whatsapp.php" ?>
    </head>
    <body style="margin: 0px;">
    <?php require "./head.php" ?>
        <div class="formulario">
            <h3 style="color: black; font-size:30px;"><b>Sua opinião é muito importante para nós!</b>  <br> </h3>
            <h3><b>Nos diga oque você achou do nosso atendimento!</b> </h3>
            <form form action="posop.php" method="post">
                <label for="nome"> <br> Nome:</label><br>
                <input type="text" id="nome" name="nome" required placeholder="ex: João da Silva Medeiros">

                <label for="email"> <br> Email:</label><br>
                <input type="text" id="email" name="email" required placeholder="ex: exemple@exemple.exemple">

                <label for="fone"> <br> Telefone:</label><br>
                <input type="text" id="fone" name="fone" required placeholder="ex: 041 9 00000000">

                <label for="op"> <br> Oque você achou da ePrivilegeCAR?</label><br>
                <input type="text" id="op" name="op" required placeholder="...">

                <a href="./posop.php" ><input type="submit"   value="Enviar"></a>
            </form>
        </div>
    </body>
</html>