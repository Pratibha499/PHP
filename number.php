<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $int=687;
    echo "<br>";
    echo is_int($int);
    echo "<br>";
    echo var_dump(is_int($int));
    echo "<br>";
    echo var_dump(is_float($int));
    echo "<br>";
    echo var_dump(is_finite($int));
    echo "<br>";
    echo var_dump(is_infinite($int));
    echo "<br>";
    echo var_dump(is_nan($int));
echo "<br>";
    // casting
    $a=8798.768;
    $int_cast=(int)$a;
    echo $int_cast;
echo "<br>";
    $a="576576.5765";
    $b="ram";
    $s="7686";
    $int_cast=(int)$a;
    echo $int_cast;
    

?>
</body>
</html>