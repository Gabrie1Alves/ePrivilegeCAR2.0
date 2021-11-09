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
        <h1 class="h1-formulario" style="margin-top: 30px;">Coloque o cpf do vendedor e o cpf/cnpj do comprador para concluir a transação no banco do site!</h1>
        <form enctype = "multipart/form-data" form action="7135postransacao658.php" method="POST" >
            <label for="cpfV"><br> Digite o cpf do vendedor do carro:</label>
            <input class="input-txt" type="text" id="cpfV" name="cpfV" required placeholder="ex: 00000000000">
            <br>
            <br>
            <label for="cpfC"><br> Digite o cpf ou cnpj do comprador do carro:</label>
            <input class="input-txt" type="text" id="cpfC" name="cpfC" required placeholder="ex: 00000000000000">
            <br>
            <br>
            <input class="btn-enviar" type="submit"  value="Enviar">
        </form>
    </body>
</html>