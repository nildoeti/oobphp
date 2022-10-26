<?php
$total = 0;
function distKM ($km) {
    global $total;
    return $km * 4;
}

echo 'percorreu ' .distKM(4) . ' quilometros.';
echo  'percorreu ' .distKM(6) . ' quilometros.';

