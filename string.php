<?php 
    $title = "Simple String Manipulation Statement";
    include "includes/header.php" 
?>
    <h1>String Manipulation</h1>
    <?php

        // Ket noi 2 chuoi lai vs nhau (Concatenation of strings)
        $phrase1 = "Jay is";
        $phrase2 = "in the world";
        $name = "jay nguyen";
        echo $phrase1." the best ".$phrase2;
        echo "<br>";
        echo "<hr>";

        // String transformation
        echo "Uppercase 1st letter : ". ucfirst($name)."<br>";
        echo "Uppercase 1st letter of each word : ". ucwords($name)."<br>";
        echo "Uppercase all letter : " .strtoupper($name)."<br>";
        echo "Lowercase all letter : " .strtolower("HI IT'S ME")."<br>";
        echo "<hr>";

        // Repeat string, so 3 la so lan repeat so 1
        echo "Repeat string : ". str_repeat("a",3)."<br>";
        echo "Repeat string - Nested function : ".strtoupper( str_repeat("a",3))."<br>";
        echo "Repeat string : ".str_repeat($name,2). "<br>";
        echo "Substring : " .substr($name,0,3). "<br>";
        echo "Substring : " .substr($name,0,4). "<br>";

        // Get position of a string
        echo "Get position of a string : " .strpos($name,"y"). "<br>";
        // Return null
        echo "Get position of a string : " .strpos($name,"b"). "<br>";

        // Find characters
        echo "Find characters j: ".strchr($name,"j"). "<br>";
        echo "Find characters g: ".strchr($name,"g"). "<br>";
        echo "Find characters R: ".strchr($name,"R"). "<br>";

        // String length
        echo "String length is : " .strlen($name). "<br>";

        // Noi cac ki tu vs nhau
        echo "Without trim : ". "A" . " B C D ". "E". "<br>";
        // Loai bo space o B va D
        echo "Trim spaces on both sides : ". "A" .trim(" B C D "). "E" . "<br>";
        // Left trim
        echo "Trim spaces on both sides : ". "A" .ltrim(" B C D "). "E" . "<br>";
        // Right trim
        echo "Trim spaces on both sides : ". "A" .rtrim(" B C D "). "E" . "<br>";
        // Replace string (k thay doi gtri that cua bien $phrase2)
        echo "Replace the world by the universe in phrase 2 : " .str_replace("the world"
        ,"the universe",$phrase2). "<br>";

    ?>
<?php require "includes/footer.php" ?>