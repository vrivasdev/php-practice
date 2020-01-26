<?php 

trait Football {
    public function isGol() {
        echo 'GOOOOO!' . $this->getName();
    }
    public function isPenalty() {
        echo 'Penalty';
    }
    public function run() {
        echo 'Football run';
    }
}