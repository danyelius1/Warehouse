<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/form_style.css">
</head>
<body>
<div class="main">

    <fieldset>
        <legend>login</legend>
        <form action="index.php" method="post">

            <label for="vardas">name:</label><br>
            <input type="text" name="name" id="name" required><br>

            <label for="email">email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="password">password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" name="submit" id="submit" class="login">

        </form>
    </fieldset>

</div>


</body>
</html>
