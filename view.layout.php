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
        <h1>
            <?=
                $greeting;
            //This code here serves as the skeleton for our separation of concerns with the view.php file. All of the code on this file will be taken and pasted onto the view.php file
            //With this, the $greeting variable here will be replaced with the value it is assigned on the view.php file
            ?>
        </h1>
    </header>
</body>

</html>