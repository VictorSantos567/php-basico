<?php 
# Declarando variaveis str
$mensagem = 'Olá mundo';

echo $mensagem;

echo '<br>';

# Declarando variaveis int
$A = 5;
$B = 3;

# operacao condicionais
if($A % 2 == 1) {
    echo 'O numero '.$A.' eh impar';
}else{
    echo 'numero par';
}

echo '<br>';

### laço de repeticao

# variavel auxiliar
$i = 10;
#testa a condição antes de executar o bloco
echo "while: ";
while ($i < 10){
    echo $i;
    $i++;
}
echo '<br>';
# executa o bloco pelo menos uma vez
$i = 10;
echo "do...while: ";
do {
    echo $i;
    $i++;
}while($i < 10);
echo '<br>';
#laço de repeticao controlado
echo "for: ";
for ($i=0; $i < 10; $i++){
    echo $i." ";
    
}
echo '<br>';
#foreach , percorre um conjunto de dados
# ou arrays
echo "foreach: ";
$i = [0,1,2,3,4,5,6,7,8,9];
# para cada elemento de i chamado de j
foreach ($i as $j){
    echo $j." ";
}
echo '<br>';
#arrays
$variavel = array(1,2,3,4,5,6);
# printa toda a variavel
print_r($variavel);
echo '<br>';
# printa os elementos
foreach ($variavel as $v){
    echo $v;
}

echo '<br>';
# é possivel dar o nome ao indice e selecionar somente ele
$string = array("A"=>"Abacaxi ", "B"=>"Abacate ", "C"=>"Amora ");

foreach ($string as $s){
    echo $s;
}
echo '<br>';
echo $string["B"];
