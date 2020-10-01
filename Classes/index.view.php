<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach($task as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strikethrough><?= $task->description; ?></strikethrough>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>        
    </ul>
</body>

</html>