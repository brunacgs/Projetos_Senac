<?php

echo "<h1>Olá mundo!</h1>";

$nome = "Bruna";
$idade = 32;

echo "$nome tem $idade anos";

echo "<hr>";

$x = 3;
$y = 7;

echo "A soma das variáveis $x e $y é " . $x + $y;

echo "<br>A subtração é " . $x - $y . ".<br>A multiplicação é " . $x * $y . ".<br>A divisão é " . $x / $y;

echo "<hr>";

$cidade = "Uberlândia";
$estado = "MG";

echo $cidade . " -  " . $estado;

echo "<hr>";

$idade = 18;

if ($idade >= 18)
    {
        echo "Maior de idade";
    }
else
    {
        echo "Menor de idade";
    }

echo "<hr>";

for($i = 0; $i <= 10; $i++)
    {
        echo "Número $i" . "<br>";
    }

echo "<hr>";

$alunos = ["Bruna", "Raphael", "Carlos", "Clécia"];
$ultimoaluno = count($alunos) - 1;
$i = 0;

while ($alunos[$i] != "Bruna")
    {
        $i++;
    }
    echo "Bruna está na posição $i";
    echo "<br>O primeiro nome é: $alunos[0]";
    echo "<br>O último nome é: $alunos[$ultimoaluno]";

echo "<hr>";

$i = 0;

while ($i != 11)
    {
        echo "Número $i";
        echo "<br>";
        $i++;
    }

echo "<hr>";

$comidas = ["arroz", "feijão", "macarrão", "batata"];

foreach ($comidas as $comida)
    {
        echo $comida . "<br>";
    }

echo "<hr>";

function dobro($numero)
{
    return $numero * 2;
}

echo dobro(43);

echo "<hr>";

$notas = [6.5, 9, 7.8];
$media = array_sum($notas) / count($notas);

if ($media >= 6)
    {
        echo "Aprovado com média superior a 6 pontos.";
    }
else
    {
        echo "Reprovado! Média inferior a 6 pontos.";
    }

echo "<hr>";

$numero = 3;
$i = 0;
$resultado = $numero * $i;

for($i = 0; $i <= 10; $i++)
    {
        $resultado = $numero * $i;
        echo "$numero * $i = " . $resultado . "<br>";
    }

echo "<hr>";

$precos = [10.9, 9.5, 7.9, 12.5, 8.2, 6.8];
$total = array_sum($precos);

echo "O preço final é $total";

echo "<hr>";

function maiornumero($n1, $n2)
{
    if($n1 > $n2)
        {
            echo "O maior número é $n1";
        }
    elseif($n1 < $n2)
        {
            echo "O maior número é $n2";
        }
    else
        {
            echo "Os números são iguais.";
        }
}

maiornumero(54, 73);

echo "<hr>";


$arquivo = "arquivo.txt";
if (isset($_POST["nome"]))
    {
        $nome = $_POST["nome"];

        file_put_contents($arquivo, $nome . PHP_EOL, FILE_APPEND);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Digite seu nome:</label>
        <input name="nome">
        <button type="submit">Enviar</button>
    </form>
    <div>
        <?php
            if (file_exists($arquivo))
                {
                    $nomes = file($arquivo);

                    foreach($nome as $nome)
                        {
                            echo "<p>Aluno: $nome</p>";
                        }
                }
        ?>
    </div>
</body>
</html>






