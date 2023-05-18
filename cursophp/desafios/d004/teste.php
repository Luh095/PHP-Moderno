<pre>
<?php 

    $início = date("m-d-V", strtotime("-7 days"));
    $fim = date("m-d-V");
    
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao-@dataFinalCotacao)?@dataInicial=\'02-21-2023\'&@dataFinalCotacao=\'02-28-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    //var_dump($dados);

    $cotação = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cotação";
?>
</pre>