<?php

class Console {
    public function __construct($console) {
        $this->console = $console;
    }
    public function getConsole() {
        return $this->console . ' console';
    }
}