<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>
<body>
    <?php
        $var1 = 3;
        $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?> <br />
    <br />
    Absolute value: <?php echo abs(0 - 50); ?><br />
    Exponential: <?php echo pow(2,8); ?><br />
    Square root: <?php echo sqrt(50); ?><br />
    Modulo: <?php echo fmod(20, 7); ?><br />
    Random: <?php echo rand(); ?><br />
    Random (min-max): <?php echo rand(1,10); ?><br />
    <br />
    += : <?php echo $var2 += 4; ?> <br />
    increment: <?php echo $var2++; ?> <br />
    decrement: <?php echo $var2--; ?> <br />
    <br />
    <?php echo 1 + "2"; ?>
    
</body>
</html>