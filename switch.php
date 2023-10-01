<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <?php
    $A = 2;

    switch($A){
        case 0:
            echo "A is 0 <br />";
            break;

        case 1: case 2:
            echo "A is either 1 or 2 <br />";
            break;
        
        case 3:
            echo "A is 3 <br/>";
            break;
        
        default:
            echo "A is not 0, 1, 2, or 3 <br/>";
            break;
        
        }
    ?>
</body>
</html>