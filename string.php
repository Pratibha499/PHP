<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $str="pratibha sharma";
    echo strlen($str);                         //calculate length of string
    echo "<br>";
    echo str_word_count($str);                 // calculate no. of words in string
    echo"<br>";
    echo strrev($str);                         // reverse the string
    echo "<br>";   
    echo strpos("pratibha sharma","pratibha"); //search the particular text in a string
    echo "<br>";
    echo str_replace("sharma","verma","pratibha sharma"); // replace some characters in string with some other string
    echo "<br>";
    echo strtolower("PRATIBHA SHARMA");
    echo "<br>";
    echo strtoupper("pratibha sharma");
    echo "<br>";
    
    
    ?>
</body>
</html>