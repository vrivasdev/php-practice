<?php

$test = 'This is an example';

if (strpos($test, 'Thiss') !== false) {
    echo 'Word founded';
}
else {
    echo 'Word not found.';
}