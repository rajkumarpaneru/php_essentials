<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue</title>
</head>
<body>
    <?php
        for ($count=0; $count <= 10; $count++){
            if($count == 5){
                continue;
            }
            echo $count . ", ";
        }

        echo "<br/>";

        for($i=0; $i<=5;$i++){
            if($i %2 == 0) {continue;}
            for($k = 0; $k <=5; $k++) {
                if($k == 3) {continue(2);}
                echo $i . "-". $k . "<br/>";
            }
        }
    ?>
</body>
</html>