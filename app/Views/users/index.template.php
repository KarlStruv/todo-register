<?php
require_once 'app/Views/partials/header.template.php'
?>

<body>

<h1>Tasks</h1> (<a href="/tasks/create">Create</a>)
<ul>

    <?php foreach ($tasks->getTasks() as $task) { ?>
        <li> <?php echo $task->getTitle(); ?></li>
        <small>
            (<?php echo $task->getCreatedAt(); ?>)
        </small>
        <form method="post" action="/tasks/<?php echo $task->getId();?>">
            <button type="submit">X</button>
        </form>
    <?php } ?>

</ul>

</body>
</html>