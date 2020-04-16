<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Stringa colorata</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="container flex">
            <!-- <h1>La password è</h1> -->
            <?php

                $password = $_GET['password'];

                if ($password == 'Boolean') {
                    echo '<h1>La password è ' . "<span class='green'>" . $password . ' '. '</span>' . 'quindi corretta</h1>';
                } elseif ($password !== 'Boolean') {
                    echo '<h1>La password è ' . "<span class='red'>" . $password . ' '. '</span>' . 'quindi sbagliata</h1>';
                }


             ?>
        </div>

    </body>
</html>
