<?php

$word = 'Malayalam';

if (strtolower($word) === strtolower(strrev($word))) {
    echo "$word is Palindrome";
}
else {
    echo "$word is not Palindrome";
}