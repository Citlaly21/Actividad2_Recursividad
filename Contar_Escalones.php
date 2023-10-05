<?php
function contarEscalones($altura) {
    if ($altura <= 0) {
        return 0;
    } else {
        return 1 + contarEscalones($altura - 1);
    }
}
$alturaDeLaEscalera = 10;
$totalEscalones = contarEscalones($alturaDeLaEscalera);
echo "Esta escalera tiene $totalEscalones escalones.";
?>