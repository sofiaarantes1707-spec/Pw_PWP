<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW2</title>
    <link rel="stylesheet" href="css\exemplo.css">
</head>

<body>
    <h2>
        Variaveis e constantes PHP
    </h2>
    <?php
    //Variaveis
    
    $a = 2; //int
    $b = 4.5; //floater
    $c = ""; //string
    $e = ''; //stirng
    $d = null; //nulo
    $teste = false; //bool 
    
    //Constantes:
    
    define(constant_name: "minha_const", value: "teste");
    const TESTE = "valor";

    //Escrevendo na tela:
    
    echo "\t<p>O valor de \$a é " . $b . "</p>\n";
    echo "\t<p>O valor de b é $a</p>\n";
    echo '\t<p>O valor de b é ' . $b . '</p>\n';
    print "\t<p>O valor de a + b é (773 + 4) = " . ($a + $b) . "</p>\n";

    echo "O valor de " . TESTE;

    //objeto datetime
    
    $d = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    echo "\t<p>A data atual é {$d->format("d/m/Y")} e são {$d->format("H:i:s")}</p>\n";
    //ou ---> {$d->format("d/m/Y - h:i:s")}
    ?>

    <h2>Estruturas de Decisão</h2>
    <h3>IF</h3>
    <?php
    if ($a > $b) 
    {
        echo "\t<p>Deu verdadeiro<p/>";
    } elseif ($a == $c && $b < $c) 
    {
        echo "\t<p> A igual a C</p>";
    }
    ?>
    <h3>Switch</h3>
    <?php
    $a = "5";
    switch ($a) {
        case 1:
            echo "\t<p>O valor é 1!</p>\n";
            break;
        case 2:
            echo "\t<p>O valor é 2!</p>\n";
            break;
        case 3:
            echo "\t<p>O valor é 2!</p>\n";
            break;
        case 4:
            echo "\t<p>O valor é 4</p>\n";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
            echo "\t<p>O valor está entre 5 e 8 </p>\n";
            echo "\t<p>Confira o valor </p>\n";
            break;
        default:
            echo "\t<p>O valor não está entre 1 e 8 </p>\n";
            break;
    }
    ?>
    <h2>Estruturas de Repetição</h2>
    <h3>Do while</h3>
    <?php
    $i = 0;
    do 
    {
        echo "\t<p>O valor de \$i é $i</p>\n";
        $i++;
    } while ($i <= 2);
    ?>

    <h2>While</h2>
    <?php
    $i = 0;
    while ($i <= 2) 
    {
        echo "\t<p>O valor de \$i é $i</p>\n";
        $i++;
    }
    ?>

    <h2>For</h2>
    <?php
    for ($i = 0; $i <= 2; $i++) 
    {
        echo "\t<p>O valor de \$i é $i</p>\n";
    }
    ?>

    <h2>Foreach</h2>
    <?php
    $vet = ["Zeca", "Pedreiro", "15998554984"];
    $vet2 = array("Zeca", "Pedreiro", "15998554984", 123);
    $vet2[] = "Itu";
    array_push($vet, "SP", "1599758616");

    foreach ($vet as $value) 
    {
        echo "\t<p>O valor atual é $value</p>\n";
    }
    ?>

    <h2>For com vetor indexado</h2>
    <?php

    for ($i = 0; $i < count($vet2); $i++) 
    {
        echo "\t<p>O valor da posição " . $i + 1 . "º do vetor \$vet2 é {$vet2[$i]}</p>\n";
    }
    ?>

    <h2>Foreach com vetor associativo</h2>
    <?php
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15997586816"];
    foreach ($vet_assoc as $key => $value) 
    {
        echo "\t<p>O valor da $key º do vetor \$vet_assoc é $value</p>\n";
    }
    echo "\t<p>Valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <h2>For com vetor bidmencional</h2>
    <?php
    // $cars = array(
    //  array("Volvo", 22, 18),
    //  array("BMW", 15, 13),
    //  array("Saab", 5, 2),
    //  array("Land Rover", 17, 15)
    //);
    $cars = [ 
        ["Volvo", 22, 18],
        ["BMW", 15, 13],
        ["Saab", 5, 2, "me leva"],
        ["Land Rover", 17, 15],
        123
    ];
     echo "\t<p>Valor avulso de \$cars é {$cars["1"]["1"]}</p>\n";

     for ($i=0; $i < count($cars); $i++) 
     { 
      if (is_array($cars[$i])) 
        for ($j=0; $j < count($cars[$i]); $j++)
        { 
             echo "\t<p>O valor da posição $j do vetor \$cars na posição \$j é {$cars[$i][$j]}</p>\n";
        } 
        else 
        {
            echo "\t<p>O valor da posição $i do vetor \$cars é {$cars[$i]}</p>\n";
        }
    } 
    ?>

    //vetor bidmencional

    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>        
    echo "\t<p>O valor de \$i é $i</p>\n";
    $i++;
    }
    ?>

    <h2>For</h2>
    <?php
    for ($i = 0; $i <= 2; $i++) 
    {
        echo "\t<p>O valor de \$i é $i</p>\n";
    }
    ?>

    <h2>Foreach</h2>
    <?php
    $vet = ["Zeca", "Pedreiro", "15998554984"];
    $vet2 = array("Zeca", "Pedreiro", "15998554984", 123);
    $vet2[] = "Itu";

    foreach ($vet as $value) 
    {
        echo "\t<p>O valor atual é $value</p>\n";
    }
    ?>

    <h2>For com vetor indexado</h2>
    <?php

    for ($i = 0; $i < count($vet2); $i++) 
    {
        echo "\t<p>O valor da posição " . $i + 1 . "º do vetor \$vet2 é {$vet2[$i]}</p>\n";
    }
    ?>

    <h2>Foreach com vetor associativo</h2>
    <?php
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15997586816"];
    foreach ($vet_assoc as $key => $value) 
    {
        echo "\t<p>O valor da $key º do vetor \$vet_assoc é $value</p>\n";
    }
    echo "\t<p>Valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <h2>Foreach com vetor bidmencional</h2>
    <?php
    $vet_assoc = ["id" => "1", "nome" => "Tião", "telefone" => "15997586816"];
    foreach ($vet_assoc as $key => $value) 
    {
        echo "\t<p>O valor da $key º do vetor \$vet_assoc é $value</p>\n";
    }
    echo "\t<p>Valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
    ?>

    <script src="js/bootstrap.bundle.js"></script>
    //CLASSES
</body>

</html>
