<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
            $div = $_GET['div'] ?? 0; //dividendo
            $divis = $_GET['divis'] ?? 1; //divisor
    ?>
    <main>
        <h1>Anatômia de uma divisão</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo</label>
            <input type="month" name="div" id="div" min="0" value="<?=$div?>">
            <label for="divis">Divisor</label>
            <input type="number" name="divis" id="divis" min="1" value="<?=$divis?>">

            <button type="submit">Analisar</button>
        </form>
    </main>
    <section>
        <h2 style="text-align:center">Estrutura da divisão</h2>
        <?php
                $resto = $div % $divis;
                $resultado = $div / $divis;
                $quociente = intdiv($div,$divis);
        ?>                

            <table class="divisao">
                <tr>
                    <td><?php echo $div?></td>
                    <td><?php echo $divis?></td>
                </tr>
                <tr>
                    <td><?php echo $resto?></td>
                    <td><?php echo $quociente?></td>
                </tr>
            </table>

            <p style="text-align: center;"><?php echo "Valor real do calculo é <strong>" . number_format($resultado,5,",",".") ."... </strong>"?></p>
        </section>
</body>
</html>