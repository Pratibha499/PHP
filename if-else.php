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
    $b=8;
    if($a>$b){
        echo $a;
    }
    else if($b>$a){
        echo $b;
    }
    else{
        echo "good";
    }
    echo "<br>";

    $t=date("H");
    if($t<"29"){
        echo "have a good day!";
    }
    
    
    
    ?>
</body>
</html>