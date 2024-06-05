<DOCTYPE html>
    <html>
        <body>
          <?php
   //Array com Chave = valor
$listalunoidade = Array(
    "Leonardo" => 31,
    "Gabriela"=> 27,
    "Bianca"=>07
);
//Array apenas com valor 
$listacores = array(
    "vermelho"
    "amarelo"
    "verde"
    "laranja"
);
//acesso ao inten do array %listaaluno(CHAVE)
echo $listalunoidade["Leonardo"];
echo "<br />";

echo $listacores[2];

echo "<br />"

//Exibir en tela todo conteudo (chave de valor) de um array 
var_dump($listalunoidade);

echo"<br />";

var_dump($listacores);
?>


        </body>
    </html>
</DOCTYPE>