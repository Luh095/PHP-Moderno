<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            //Cotação copiada do Google
            $cotação = 5.17;

            //Quanto $$ você tem?
            //$real = $real / $cotação;
            $real = $_REQUEST["din"] ?? 0;

            //Mostrar o resultado
            //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dólar, 2, ",", ".");

            //Formação de moedas com internacionalização!
            //Biblioteca int1 (Internallization PHP)

            $padrão = numfmt_create("pt-br",NumberFormatter::CURRENCY);

            echo "Seus " . number_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
