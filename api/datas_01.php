<div class="titulo">Datas #01</div>

<?php
setlocale(LC_TIME, 'portuguese.utf-8');
// setlocale(LC_ALL, 'pt_BR', 'pt_BR.UTF-8', 'pt_BR.utf-8', 'portuguese-brazilian');
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
// setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'ptb');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+10 year');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);
