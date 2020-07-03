<?php
include_once 'Dancer.php';

class SquareDance
{
    public $SquareDance;
    public $manQueue;
    public $womanQueue;

    public function __construct()
    {
        $this->manQueue = new SplQueue();
        $this->womanQueue = new SplQueue();
        $this->SquareDance = [];
    }

    public function createDance()
    {
        $firstName = ['Vu', 'Do', 'Pham', 'Tran', 'Ly'];
        $lastName = ['Tung', 'Nguyen', 'V.anh', 'Cuong', 'Duong', 'Manh', 'Luc'];
        $fullName = $firstName[rand(0, count($firstName) - 1)] . '  ' . $lastName[rand(0, count($lastName) - 1)];
        $genders = ['Male', 'Female'];
        $gender = $genders[rand(0, 1)];

        return new Dancer($fullName, $gender);
    }

    public function addToQueue($dancer)
    {
        switch ($dancer->getGender()) {
            case 'Male':
                $this->manQueue->enqueue($dancer);
                break;
            case 'Female':
                $this->womanQueue->enqueue($dancer);
                break;
            default;
        }

    }

    public function makePair()
    {
        $singleMan = $this->manQueue->dequeue();
        $singleWoman = $this->womanQueue->dequeue();
        $couple = [$singleMan, $singleWoman];
        array_push($this->SquareDance, $couple);

        return " Next couple is " . $singleMan->getName() . '--' . $singleWoman->getName();
    }

    public function getSquareDance()
    {
        return $this->squareDance;
    }
}