<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions: Default Argument Values</title>
</head>
<body>
    <?php
        function paint($room="office",$color="red"){
            return "The color of the {$room} is {$color}. <br/>";
        }

        echo paint('blue');
        echo paint();
    ?>
    
</body>
</html>