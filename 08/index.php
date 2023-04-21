<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_REQUEST['salario'] ?? 0;
        $minimo = $_REQUEST['minimo'] ?? 0;
    ?>
    <section>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salario">Salario:</label>
        <input type="number" name="salario" id="salario" step="0.01" min="1">
        <label for="minimo">Salario Mínimo:</label>
        <input type="number" name="minimo" id="minimo" step="0.001" min="1">
       
        <p><?php echo "Considerando o sálario mínimo de <em><strong> R$". number_format($minimo,2,",",".") . "</strong></em>"?></p>
        <button type="submit">Calcular</button>
    </form>
    </section>
    <main>
        <h2>Resultado Final</h2>
        <?php 
            $resultado = intdiv($salario, $minimo);
            //$resto = $salario - ($minimo * $resultado);
            $resto = $salario % $minimo;
            
            echo "Quem recebe um salario de <em> R$" . number_format($salario,2,",",".") . "</em> ganha <strong>" . $resultado . " salarios mínimos + </strong> R$ <em>" . number_format($resto,2,",",".") . "</em>";
        ?>
    </main>
</body>
</html>