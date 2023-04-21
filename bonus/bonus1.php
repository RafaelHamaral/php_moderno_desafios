<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bonus - cotacao BB</title>
</head>
<body>
    <main>
        <h1>Conversor de Moeda</h1>
    <?php 
        $inicio = date("m-d-Y", strtotime("-7 days")) ;
        $fim = date("m-d-Y") ;
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        //quanto voce tem?
        $real = $_REQUEST["cotacao"] ?? 0;

        //Equivalencia em dolar
        $dolar = $real / $cotacao;
        $euro = $real * $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //biblioteca intl(Internallization PHP), posso trocar pt_BR por us, pt_PT etc.. 

        $padrao_euro = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo numfmt_format_currency($padrao, $real, "BRL") . " equivale a " . numfmt_format_currency($padrao, $dolar,"USD");

        echo "<br>";

        echo numfmt_format_currency($padrao_euro, $real, "BRL") . " convertido em euro é " . numfmt_format_currency($padrao_euro, $euro,"EUR");


    ?>
        <p><a href="javascript:history.back()">Voltar para a página anterior</a></p>
    </main>
</body>
</html>


