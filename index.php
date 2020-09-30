<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <Header>
        <h1>
            <?php
                $name = $_GET['name'];
                //The code here gets the name value within the array and assigns it to the name variable
                //The user can see its function by going to their localhost:8888/?name=Matt (port dependant on server setup)
                    echo "Hello, $name"; 
            ?>
        </h1>
        <h1>
            <?=
                "Hello, " . $_GET['name'];
                //Another way to display the same code above but using concatenation and if you notice I use "<?=" instead of "<? echo" the use of <?= is a shortcut 
            ?>
        </h1>
    </Header>
</body>

</html>
