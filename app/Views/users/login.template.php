<?php
require_once 'app/Views/partials/header.template.php';
?>


<body>
<a href="/">Back</a>
<br>

<form action="/login" method="post">
    <label for="email"> E-Mail:</label>
    <input type="email" name="email" id="email">

    <label for="password"> Password:</label>
    <input type="password" name="password" id="password">

    <button type="submit">Create</button>

</form>

</body>