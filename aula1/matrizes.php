<?php

$data = [
    'Jonathan',
    'Xavier'
];

$count = 0;
foreach ($data as $key => $value) {
    echo "{$key} => {$value}<br>";
    $count++;
}