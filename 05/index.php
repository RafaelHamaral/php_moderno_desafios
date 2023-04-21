<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia de uma divisao</title>
</head>
<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo:</label>
            <input type="number" name="div" id="div" min="0" value="<?=$div?>">
            <label for="divis">Divisor:</label>
            <input type="number" name="divis" id="divis" min="1" value="<?=$divis?>">

            <button type="submit">Analisar</button>
        </form>
    </section>

        <main>
            <header>
                <h2>Estrutura da Divisão</h2>
            </header>
            <?php 
                $div = $_GET['div'] ?? 0;
                $divis = $_GET['divis'] ?? 1;

                if($div && $divis != null){

                $resto = $div % $divis;
                $resultado = $div / $divis;

              
                echo "<ul><li> Dividendo: $div </li>";
                echo "<li> Divisor: $divis </li>";
                echo "<li> Resultado: $resultado </li>";
                echo "<li> Quociente: " . intdiv($div,$divis) . "</li>";
                echo "<li> Resto: $resto </li></ul>";
            } else{
                echo "<h4>Não é possivel calcular. Você preencheu os dois campos? </h4>";
            }
            ?>
        </main>
</body>
</html>