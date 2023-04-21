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
        $nascimento = $_REQUEST['nasc'] ?? 1990;
        $ano_futuro = $_REQUEST['idade'] ?? date('Y');
    
    ?>
    <section>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano você nasceu?</label>        
        <input type="number" name="nasc" id="nasc" minLength="">
        <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em (<strong><?php echo date('Y');?></strong>)</label>
        <input type="number" name="idade" id="idade">
        <button type="submit">Qual será minha idade? </button>
    </form>
    </section>
    <main>
        <h2>Resultado</h2>
        <?php 
            $calc_idade = $ano_futuro - $nascimento;

            echo "Quem nasceu em <strong>$nascimento</strong> vai ter <strong>$calc_idade</strong> em $ano_futuro!";
        ?>
    </main>
</body>
</html>