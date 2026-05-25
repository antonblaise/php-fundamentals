<?php

declare(strict_types=1);

$max_number = 5;
$count = 0;

while (1) {
    echo $count % ($max_number+1) . "\n\n";

    sleep(1);

    if ($count === $max_number) {
        $count = 0;
    }  else {
        $count++;
    }
}