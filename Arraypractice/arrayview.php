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

    <?php
    echo '<pre>';
    var_dump($person);
    echo '</pre>';
    ?>
    <!-- the function var_dump is a way to print the array of objects, as using echo only allows you to print a string  
            with this, we are also able to use HTML to restyle and format the code example shown here using <pre> tags
    -->

    <ul>
        <?php foreach ($task as $key => $details) : ?>
            <li>
                <strong>
                    <?=
                        ucwords($key);
                    //This function ucwords(); stands for use capital words, will turn the first letter in every word into a capital even if the word is a string every first letter 
                    //will be turned into a capital letter
                    ?>:
                </strong>
                <?= $details; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li>
            <strong>
                Name:
            </strong>
            <?= $task['title']; ?>
        </li>
        <li>
            <strong>
                Due Date:
            </strong>
            <?= $task['due']; ?>
        </li>
        <li>
            <strong>
                Assigned To:
            </strong>
            <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>
                Status:
            </strong>
            <?php
            if ($task['completed']) {
                echo '&#9989;';
            } else {
                echo 'Incomplete';
            }
            ?>
            <?=
                $task['completed'] ? 'Complete' : 'Incomplete';
            //This here demonstrates the ternary syntax. If the boolean is true "Complete" will be displayed but if the boolean is false "Incomplete" will be displayed
            ?>
        </li>
    </ul>

    <ul>
        <?php if ($task['completed']) : ?>
            <span class="icon">&#9989;</span>
        <?php else : ?>
            <span class="icon">Incomplete</span>
        <?php endif; ?>
    </ul>

    <!-- The code shown above is another shortcut way for a conditional statement that allows the use of HTML as well -->

    <?php
    die(var_dump($person));
    ?>
    <!-- This die function, stops anything from running after its input is displayed/ran -->

</body>

</html>