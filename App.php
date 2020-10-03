<?php

App::bind('config', require 'config.php');

//find the configuration array, take the array store it within our container and assign it to a key named 'config'

$config = App::get('config');

//this will return the configuration array

//throw an array of stuff into a box and label it