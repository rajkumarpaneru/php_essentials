<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans</title>
</head>
<body>
    <?php 
        $result1 = true;
        $result2 = false;

        echo $result1 . "<br />";
        echo $result2 . "<br />";
        echo is_bool($result1) . "<br />";
    ?>

</body>
</html>