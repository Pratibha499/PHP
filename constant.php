<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("PRATIBHA","sharma");
    echo PRATIBHA;
    echo "<br>";
define("clg", ["cse","btech","ee"]);      //Array constant
echo clg[1];

    echo "<br>";
    define ("gla",["pratibha","vaishnavi","kapil","sonu","ayushi"]);
    function test(){
        echo gla[3];
        echo "<br>";
        echo gla[4];
    }
    
test();
    ?>
</body>
</html>