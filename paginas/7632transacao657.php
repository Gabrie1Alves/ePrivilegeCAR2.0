<html>
    <head>
        <link rel="stylesheet" href="../css/formulario.css">
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
        <h2>Coloque o cpf do vendedor e o cpf/cnpj do comprador para concluir a transação no banco do site!</h2>
        <form enctype = "multipart/form-data" form action="7135postransacao658.php" method="POST" >
            <label for="cpfV"><br> Digite o cpf do vendedor do carro:</label>
            <input type="text" id="cpfV" name="cpfV" required placeholder="ex: 00000000000">
            <br>
            <br>
            <label for="cpfC"><br> Digite o cpf ou cnpj do comprador do carro:</label>
            <input type="text" id="cpfC" name="cpfC" required placeholder="ex: 00000000000000">
            <br>
            <br>
            <input type="submit"  value="Enviar">
        </form>
    </body>
</html>