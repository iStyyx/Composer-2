<?php
    require_once '../src/wcs/Hello.php';
    require_once '../vendor/autoload.php';
    use App\Wcs\Hello;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer - 2</title>
</head>
<body>
    <?php

        $hello = new Hello();
        echo $hello->talk();

    ?>
</body>
</html>