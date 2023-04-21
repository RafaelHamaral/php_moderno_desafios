<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz Quad e Cub</title>
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <section>
    <form action="<?php echo $_SERVER['PHP_SELF']?>"method="get">
        <label for="raiz">Número</label>
        <input type="number" name="raiz" id="raiz" step="0.001" value="<?=$raiz?>">

        <button type="submit">Calcular Raízes</button>
    </form>
    </section>
    <main>
        <?php 
            $raiz = $_GET['raiz'] ?? 1;

            //var_dump($raiz);

            if($_GET['raiz'] != null){
            echo "<p>Analisando o <strong>número $raiz</strong>, temos: </p>";

            echo "<ul><li> A sua <em>raiz quadrada</em> é <strong>". number_format(sqrt($raiz),3,".",",") . "</strong></li>";
            echo "<li> A sua <em>raiz cubica</em> é <strong>" . number_format($raiz ** (1/3), 3, ".",",") . "</strong></li></ul>";
        } else {
            echo "<h4>informe um número para realizarmos o calculo<h4>";
        }
        ?>
    </main>
</body>
</html>