<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1);
//echo 4 / 0 . '<br>';

error_reporting(E_ERROR);
// echo 4 / 0 . '<br>';

error_reporting(E_ALL);
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring){
    $text = 'include';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<br>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<br>';

restore_error_handler();

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';