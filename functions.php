<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
         function say_hello() {
            echo "Hello World! <br/>";
         }

         say_hello();

         function say_hello_to($name){
            echo "Hello {$name}! <br/>";
         }

         say_hello_to("John");
    ?>
</body>
</html>