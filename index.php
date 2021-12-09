<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugasan 3</title>
</head>

<body>
    <?php
    $dir = "image";
    $image = scandir($dir);

    foreach ($image as $key => $value) {
        if ('.' !== $value && '..' !== $value) {
            echo "<li><a href='image/".$value."'>".$value."</a></li>";
        }
    }
    ?>
</body>

</html>