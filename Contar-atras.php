<?php 
function contarHaciaAtras($numero) {
    if ($numero == 0) {
        echo "Cero";
    } else {
        echo $numero . ", ";
        contarHaciaAtras($numero - 1);
    }
}

$numeroInicial = 5;
contarHaciaAtras($numeroInicial);

?>
