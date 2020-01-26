<?php 

include_once 'vendor/autoload.php';

class Player extends Sport{
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    private function getName() {
        return $this->name;
    }

    use Baseball, Football {
        Baseball::run insteadOf Football;
        Football::run as runAsFootBall;
    }

    public function action() {
        $this->practice();
        $this->isGol();
        $this->isHomeRun();
        $this->run();
        $this->runAsFootBall();
    }
}