<?php

$zahlen = array("alice" => 1, "bob" => 2, "qwert" => 3, "zerg" => 4, "carni" => 5, "test" => 6);
rsort($zahlen);

foreach ($zahlen as $i) {
    if ($i == 8) {
        break;
    }
    echo $i . "\n";
}
