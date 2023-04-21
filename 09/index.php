<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_REQUEST['valor1'] ?? 1;
        $peso1 = $_REQUEST['peso1'] ?? 1;

        $valor2 = $_REQUEST['valor2'] ??1 ;
        $peso2 = $_REQUEST['peso2'] ?? 1;
    ?>
    <header>
        <h1>Media Aritimetica</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2">
            <button type="submit">Calcular Médias</button>
    </form>
    </section>
    <main>
        <h2>Cálculo das Médias</h2>
        <?php echo "Analisando os valores $valor1 e $valor2: <br>" ?>
        <?php 
            $media = ($valor1 + $valor2) / 2;
            $ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<ul><li>A <strong>média Aritimética Simples</strong> entre os valores é igual a " . number_format($media,2,",",".") . ".</li>";
            echo "<li>A <strong>média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " . number_format($ponderada,2,",",".") . ".</li></ul><br>";
        ?>
    </main>
</body>
</html>