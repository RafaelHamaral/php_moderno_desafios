<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Numeros Reais</title>
</head>
<body>
        <header>
            <h1>Resultado</h1>
        </header>
    <main>
        <?php 
            $real = $_GET["real"] ?? 0;

            $int = (int) $real;
            $fra = $real - $int;

            echo "<p>O numero digitado foi <strong>" . number_format($real,"3",",",".") . "</strong></p>";
            echo "<ul><li>A parte <em>inteira</em> do numero é <strong>" . number_format($int,0,",",".") . "</strong></li>";
            echo "<li>A parte <em>fracionada</em> do numero é <strong>" . number_format($fra,"3",",",".") . "<strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>