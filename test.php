<?php

$name = 'Matthew Hyun';
//In PHP the Dollar Sign, $, is used to distinguish a variable 

$greeting = 'Hello my name is';

echo "{$greeting} {$name}";

echo $greeting . ',' . $name;

//There are multiple ways to use variables
//The first example shows nesting the variable within a string
//The second example shows the use of concatenation

//In PHP echo is used kind of like return or print, this is whats used to display the data on the page.

//In PHP if there is only PHP code on the file a closing tag ? followed by > is not needed, however on a file with code other than PHP that closing tag is required