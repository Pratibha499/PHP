<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$txt="Function";
echo "<h1>" .$txt. "</h1>";
    function practice(){
        static $s=1;
        echo $s;
        $s++;
    }
    practice();
    echo "<br>";
    practice();
    echo "<br>";
    practice();
    echo "<br>";
    practice();
    ?>
</body>
</html>