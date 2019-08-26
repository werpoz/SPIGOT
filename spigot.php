<?php
/*
       Regresa una lista con los primeros d dígitos
       de pi utilizando el algoritmo de espita
       diseñado por Jeremy Gibbons. Implementación
       de John Zelle con ligeras alteraciones por
       Ariel Ortiz y adaptado de C a PHP.
*/
set_time_limit(600);
function cal($d)
{
    (int) $q = 0;
    (int) $r = 0;
    (int) $t = 0;
    (int) $k = 0;
    (int) $n = 0;
    (int) $l = 0;
    $x = array();
    list($q, $r, $t, $k, $n, $l) = array(1, 0, 1, 1, 3, 3);
    while (count($x) < $d) {

        if (4 * $q + $r - $t < $n * $t) {
            $x[] = $n;
            list($q, $r, $t, $k, $n, $l) = array(
                10 * $q,
                10 * ($r - $n * $t),
                $t,
                $k,
                floor((10 * (3 * $q + $r)) / $t - 10 * $n),
                $l
            );
        } else {
            list($q, $r, $t, $k, $n, $l) = array(
                $q * $k,
                (2 * $q + $r) * $l,
                $t * $l,
                $k + 1,
                floor(($q * (7 * $k + 2) + $r * $l) / ($t * $l)),
                $l + 2
            );
        }
    }
    return ($x);
}


foreach (cal(45) as $v) {
    echo "{$v}";
}
