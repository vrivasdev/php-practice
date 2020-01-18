<?php

class Gamer {
    protected $gamer;
    protected $console;

    public function __construct($gamer, $console) {
        $this->console = $console;
        $this->gamer = $gamer;
    }
    public function getGamer() {
        return $this->gamer . ' is playing ' . $this->console->getConsole();
    }
}