<?php
require_once 'app/Views/partials/header.template.php'
?>

<body>

<h1>Users</h1> (<a href="/">back</a>)
<ul>

    <?php foreach ($users->getUsers() as $user) { ?>
        <li> <?php echo $user->getName(); ?></li>
    <?php } ?>

</ul>

</body>
</html>