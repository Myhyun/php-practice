<?php
    $names = [
        'Matt',
        'Trungcan',
        'Omar',
    ];

    $person = [
        'age' => 22,
        'hairColor' => 'black',
        'career' => 'web developer'
    ];

    $task = [
        'title' => 'Finish Homework',
        'due' => 'today',
        'assigned_to' => 'Matthew',
        'completed' => false
    ];

    $person['name'] = 'Matt';
    //Another way to create a key value pair using an array that already exists/push something into an array

    unset($person['age']);
    //using unset is a way to remove an item from an array, as shown here this would remove the "age => 22" key/value pair
    
    //when creating key/value pairs within an array we use "=>" 





require 'arrayview.php';