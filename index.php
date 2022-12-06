<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peter Mwansa PHP</title>
</head>
<body>

    <h1>Peter Mwansa PHP first app with the drawing of the first letter of my name</h1>

    <p>
        <?php
            echo "The SHA256 hash of \"Peter Mwansa\" is: ";
            $sha256 = Print hash('sha256','Peter Mwansa');

           
        ?>

    </p>

    <?php

    $name = ' ASCII ART with the first letter of my name:

        ***********
        **       ***
        **       ***
        **       ***
        ***********
        **
        **
        **
        **
        **';


    echo "<pre>";
    echo $name;
    echo "</pre>";

    ?>
</body>
</html>




