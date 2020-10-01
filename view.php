<?php 

$greeting = 'Hello World'; 

require 'view.layout.php';

//This is called separation of concerns, this file requires all the code that is on the "view.layout.php" file and replaces the "<?= $greeting ? >" code with our $greeting variable here 
//This is done through the code on line 5 which requires the file.