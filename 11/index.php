<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? 0;
        $perc = $_REQUEST['perc'] ?? 0;
    ?>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

        <label for="preco">Preço do Produto(R$)</label>
        <input type="number" name="preco" id="preco" step="0.01">
        <label for="perc">Qual será o percentual de reajuste?<strong>(<span name="span" id="span">0</span>%)</strong></label>
        <input type='range' name="perc" id="perc" value='0' min='0' max='100'>

        <script>
        var faixa = document.getElementById('perc');
        var valor = document.getElementById('span');
        faixa.addEventListener('input', function() {
            valor.textContent = this.value;
        });
        </script>
        
        <button type="submit">Reajustar</button>
        </form>
    </section>
    <main>
        <h2>Resultado do Reajuste</h2>
        <?php 
        $calculado = $preco + (($perc/100)*$preco);

        echo "O produto que custava <em>R$" . number_format($preco,2,",","."). "</em>, com <strong>$perc% de aumento</strong> vai passar a custar <strong>R$" . number_format($calculado,2,",",".") . "</strong> a partir de agora."

        ?>
    </main>
</body>

</html>