<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

echo "<hr>";

// for($contador = 0;$contador < VALOR_LIMITE;$contador++) {
//     echo "for $contador <br>";
// }
// o FOR só pra mostrar que é melhor de usar do que o WHILE

$contador = 100;
do {
    echo "do-while $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);
// do while significa q ao menos 1 expressão será impressa, somente o while pode ser que não imprima nada dependendo da situação.

echo "<hr>";

$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}