<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
    <?php
    /**
     * string
     * int, integer
     * float
     * array
     * bool, boolean
     *  */ 

     $var1 = 1.5;
     settype($var1, "integer");
     echo $var1 . "<br />";
     echo gettype($var1) . "<br />";

     $var2 = 3.14;
     $var3 = (int) $var2;
     echo $var2 . "<br />";
     echo $var3 . "<br />";

    ?>
</body>
</html>