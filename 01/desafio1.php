<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex4/style.css">
    <title>Resposta</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
    <?php 

        $resposta = $_GET["numero"];
        $antecessor = $_GET["numero"] - 1;
        $sucessor = $_GET["numero"] + 1;

        echo "<p> O numero digitado é <strong>$resposta</strong> </p>";
        echo "<p>Seu <em>antecessor</em> é $antecessor</p>";
        echo "<p>Seu <em>sucessor</em> é $sucessor</p>";
    ?>

    <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>
</body>
</html>