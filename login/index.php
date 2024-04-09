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

        <form action="index.php" method="post">

            <label for="vardas">name</label>
            <input type="text" name="name" id="name" required>

            <label for="email">email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">password</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" id="submit">


        </form>

    </fieldset>

</div>


</body>
</html>