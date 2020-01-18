<?php 

include_once 'vendor/autoload.php';

class Player extends Sport{

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