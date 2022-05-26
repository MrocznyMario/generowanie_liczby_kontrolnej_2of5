<?php

$zamowienie = '00000782977';

echo generate($zamowienie);

function generate($zamowienie) {
    $zamowienieArray = str_split($zamowienie);
    $sumaI = 0;
    $sumaII = 0;

    for ($i = 0; $i < strlen($zamowienie); $i++) {
        $a = $i * 2;
        $b = $a - 1;
        if ($a < strlen($zamowienie)) {
            $sumaI += intval($zamowienieArray[$a]);
        }

        if ($b < strlen($zamowienie) && $b >= 0) {
            $sumaII += intval($zamowienieArray[$b]);
        }
    }

    $iloczyn = $sumaI * 3;

    $sumaIII = $sumaII + $iloczyn;
    $ean = 10 - ($sumaIII % 10);
    return $zamowienie . $ean;
}
