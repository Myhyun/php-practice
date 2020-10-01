<?php

// require 'functions.php';

class Task {

    public $description;
    public $completed = false;
    //protected means that the property is shut out from the outside world, ie outside of this class
    public function __construct($description)
    {
        $this->description = $description;
        //setting a property description to THIS object using the arrow
        //Automatically triggered on instantiation
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

// $task = new Task('Go to the Store'); //a new task object
// $task->complete(); //completed the task
// var_dump($task->isComplete()); 

$task =[
    new Task ('Go to the store'),
    new Task ('Finish my homework'),
    new Task ('Clean my room')
];

$tasks[0]->complete();


// dd($task);

require 'index.view.php';

//"task" is the name of the class, this can be anything 
//If a function is defined in a class it is called a "method"