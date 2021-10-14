<?php
require_once 'app/Views/partials/header.template.php';
?>

<body>
<a href="/">Back</a>
<br>

<form action="/register" method="post">
    <label for="email"> E-Mail:</label>
    <input type="email" name="email" id="email">

    <label for="name"> Name:</label>
    <input type="text" name="name" id="name">

    <label for="password"> Password:</label>
    <input type="password" name="password" id="password">

    <label for="password_confirmation"> Repeat password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation">

    <button type="submit">Create</button>

</form>

</body>