<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex4/style.css">
    <title>Exercicio 7</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios:</h1>
    </header>
    <main>
    <?php 
        $min = 0;
        $max = 100;
        $random = mt_rand($min, $max); //mt_rand() 1997 - Mersenne Twister (4x mais rapido que o rand())

        echo "Gerando um número aleatório entre $min e $max <br>";
        echo "O valor gerado foi <strong>$random</strong>";

    ?>
       <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>
</html>