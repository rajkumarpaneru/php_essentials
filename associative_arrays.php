<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        $info = [
            "first_name" => "Rajesh",
            "last_name" => "Hamal"
        ];

        echo $info["first_name"]. "<br />";
        echo $info["first_name"]. " ". $info["last_name"] . "<br />";

        $info["first_name"] = "Ramesh"; 

        echo $info["first_name"]. " ". $info["last_name"] . "<br />";
    ?>
</body>
</html>