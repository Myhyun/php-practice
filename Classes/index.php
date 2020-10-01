<?php

require 'functions.php';

class Task {

    protected $description;
    protected $completed = false;
    //protected means that the property is shut out from the outside world, ie outside of this class
    public function __construct($description)
    {
        $this->description = $description;
        //setting a property description to THIS object using the arrow
        //Automatically triggered on instantiation
    }
}

$task = new Task('Go to the Store');

dd($task);

require 'index.view.php';

//"task" is the name of the class, this can be anything 
//If a function is defined in a class it is called a "method"