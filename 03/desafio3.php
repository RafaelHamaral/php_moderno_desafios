<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $conv = $_GET["conv"];
            $resultado = ($conv / 5.01);

            echo "R\$ " . number_format($conv,2,",",".") . " equivale a " . "US\$ " . number_format($resultado,2,",",".");

            echo "<br><br> --------- COM INTERNACIONALIZAÇÃO --------- <br><br>";

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //biblioteca intl(Internallization PHP), posso trocar pt_BR por us, pt_PT etc.. 
        

            echo numfmt_format_currency($padrao, $conv, "BRL") . " equivale a " . numfmt_format_currency($padrao, $resultado,"USD");
        ?>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>

    </main>

</body>
</html>