<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exemplo.css">
</head>

<body>
    <h1>Hello World</h1>
    <h2>Variáveis e constantes PHP</h2>

    <?php

        //variável
        /*

        */
        $a = 2; // int
        $b = 0.0; // float
        $c = ""; // string
        $d = ''; // string
        $e = null; // nulo
        $teste = false; // boolean
        
        //constante
        define("Minha_Const", "teste"); // "define" é uma função
        const TESTE = "Valor";

        //Escrevendo na tela
        echo "<p>O valor de a é " . $a . "</p>\n"; // é possivel declarar tags apenas dentro do echo
        echo "\t<p>O valor de b é $b</p>\n";
        echo "\t<p>O valor de b é $b</p>\n";
        print "\t<p>O valor de a + b é " . ($a + $b) . "</p>\n";

        echo "O valor de " . TESTE;

        //Objeto DateTime
        $d = new DateTime(
            "now",
            new DateTimeZone(("America/Sao_Paulo"))
        );

        echo "\t<p>A data e hora atual é {$d->format("d/m/Y - H:i:s")}</p>\n";
        // H -> a hora vai de 00 até 23, i -> minuto
    ?>
    <h1>Estruturas de decisão</h1>
    <h2>IF</h2>
    <?php
        if ($a > $b) {
            echo "\t<p>Deu verdadeiro</p>";
        } else if ($a == $c && $b < $c) {
            echo "\t<p>A é igaul a C";
        }
    ?>

    <h2>SWITCH</h2>
    <?php
        switch ($a) {
            case 1:
                echo "\t<p>O valor é $a</p>\n";
                break;
            case 2:
                echo "\t<p>O valor é $a</p>\n";
                break;
            case 3:
                echo "\t<p>O valor é $a</p>\n";
                break;
            dafault:
                echo !teste;
                break;
        }
    ?>

    <h1>Etruturs de repetição</h1>
    <h2>Do...While</h2>
    <?php
        $i = 0;
        do {
            echo "O valor de i é $i";
            i++;
        } while($i <= 10);
    ?>
</body>

</html>