<?php 

class CheckIfNumberIsOdd {
    protected $oddNumber = null;
    protected $squareSize = null;

    protected function checkIfNumberIsOdd($argv = null) {
        if ($argv % 2 != 0 && $argv > 0) {
            $this->oddNumber = true;
            $this->squareSize = $argv;
        } else {
            $this->oddNumber = false;
        }
    }
}

class DrawSquare extends CheckIfNumberIsOdd {
    private $x = 0;
    private $y = 0;
    private $inputArgument = null;

    public function __construct($argv) {
        $this->checkIfNumberIsOdd($argv);
        $this->inputArgument = $argv;
    }

    public function drawSquare() {
        if ($this->oddNumber === true) {
            for ($this->x = 1; $this->x <= $this->inputArgument; ++$this->x) {
                for ($this->y = 1; $this->y <= $this->inputArgument; ++$this->y) {
                    if (($this->x == 1) || ($this->y == 1) || ($this->x == $this->inputArgument) || ($this->y == $this->inputArgument) || ($this->x == $this->y) || ($this->y == ($this->inputArgument - $this->x + 1))) {
                        echo " X ";
                    }
                    else {
                        echo " * ";
                    }
                }
                echo "\n";
            }
        }
    }

    public function __destruct() {
        if ($this->oddNumber === true) {
            $this->drawSquare($this->inputArgument);
            echo "\nSquare size {$this->squareSize}\n";
        } else {
            echo "\nPlease enter a valid number.\nThe number must be positive and odd.\n";
        }
    }
}

$drawNewSquare = new DrawSquare($argv[1]);