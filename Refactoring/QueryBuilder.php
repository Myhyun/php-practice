<?php

class Contractor

{
    protected $electrician;

    protected $plumber;

    protected $designer;

    public function __construct($electrician, $plumber, $designer)
    {
        $this->electrician = $electrician;
        $this->plumber = $plumber;
        $this->designer = $designer;
    }

    public function performWork()
    {
        //$electrician
        //$plumber
        //$designer
    }

}

//Rather than this Contractor class doing all the work by itself, 
//the Contrator class instead delegates the different tasks to the different dependencies (the electrician, plumber, and designer)
