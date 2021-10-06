<?php

// Com For
for ($i=1; $i <= 10; $i++) {
    for ($j=1; $j <= 10 ; $j++) {
        $result = $i * $j;
        echo "{$i} x {$j} = {$result}<br>";
    }
    echo '<hr>';
}

// Com Foreach
/* $data = [
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10
];

$data2 = [
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9,
    10 => 10
];

foreach ($data as $key => $value) {
    foreach ($data2 as $key2 => $value2) {
        $result = $key * $value2;
        echo "{$key} x {$value2} = {$result}<br>";
    }
    echo "<hr>";
} */