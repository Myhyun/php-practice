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
    </header>
    <ul>


        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>

        <!-- Alternate way of doing what is done below
                close the first php tag early
                enclose the html element and php within a foreach and an endforeach
        -->

        <?php
        foreach ($names as $name) {
            echo "<li>$name</li>";
        }
        //foreach is a PHP construct, for each $name (just something that can be iterated over like an array), 
        //we are calling it $name (we can call it anything ex. $foobar, the more appropriate the clearer it is) 
        ?>

        <?php foreach ($person as $key => $feature) : ?>
            <li>
                <strong>
                    <?= $key; ?>
                </strong>
                <?= $feature; ?>
            </li>
        <?php endforeach; ?>
        <!-- The code above shows how we are able to display both key/value pairs from an array
            we are also able to separately attach html elements to them 
        -->
    </ul>
</body>

</html>