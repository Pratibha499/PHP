<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=5;
    $b=7;
    function test(){
        global $a,$b;
        $a=$a+$b;
    }

    Test();
    echo $a;
    echo "<br>";

    function myTest() {
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
      }
      myTest();
      echo $b;
    ?>
</body>
</html>