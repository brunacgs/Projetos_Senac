<?php
$arquivo = "produtos.txt";
if (isset($_POST["produto"]))
    {
        $nome = $_POST["produto"];
        $preco = $_POST["preco"];
        $foto = $_FILES["imagem"]; 

        $caminho = "images/" . time() . ".jpg";

        move_uploaded_file(
            $foto["tmp_name"],
            $caminho
        );

        $linha = $nome . "|" . $preco . "|" . $caminho;

        file_put_contents($arquivo, $linha . PHP_EOL, FILE_APPEND);
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
        <label>Digite o nome do produto:</label>
        <input name="produto">
        <label>Digite o preço do produto:</label>
        <input name="preco">
        <label>Envie a imagem do produto:</label>
        <input type="file" name="imagem">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>






