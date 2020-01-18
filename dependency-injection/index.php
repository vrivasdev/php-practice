<?php

include_once 'console.class.php';
include_once 'gamer.class.php';

$gamer = new Gamer('Daniel', new Console('Playstation'));
echo $gamer->getGamer();