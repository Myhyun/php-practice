<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <?php
        $age = 22;
        $location = 'San Diego';
        //Creating sample variables
        ?>
        <h1>
            <?=
                "Hello, " . htmlspecialchars($_GET['name']);
            //This code here demonstrates a function that would prevent users from inputting in malicious code into the search bar after the /?name=
            //Also known as SANITIZING YOUR INPUTS
            ?>
        </h1>
        <h1>
            <?=
                "Hello, I am from {$location} and I am {$age} years old"
            //This code here if the user goes to localhost8888/functions.php will only display "Hello," and "Hello, I am from San Diego and I am 22 years old"
            //But if the users instead goes to localhost8888/functions.php/?Name=Matt it would display "Hello, Matt" and "Hello, I am from San Diego and I am 22 years old"
            //
            ?>
        </h1>
    </header>
</body>

</html>