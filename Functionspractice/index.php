<?php

function dumper($one, $two, $three) {
    //dumper is just the name of the function this can be anything,
    //$one, $two, $three are just variables that are passed to the function
    //the name of the variables can be anything but it is good to make it clear for other developers
    var_dump($one, $two, $three);
}

dumper('hello', 'big', 'world');
//Here 'hello' 'big' and 'world' are the values passed for the parameters 

function checkAge($age) {
    if(checkAge($age) >= 21) {
        echo 'Please come in';
    } else {
        echo 'Sorry you must be atleast 21 years old to enter';
    }
};