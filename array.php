    <?php 
    $title = "Simple Array and Printouts";
    include "includes/header.php" 
    ?>
    <h1>Arrays</h1>
    <?php
    // An array
    // Only 1 datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,11,10);
    echo $numbers[5];
    echo "<p>$numbers[9]</p>";
    $size = count($numbers);
    echo "<p>Array numbers is $size</p>";
    
    for ($count =0;$count<$size;$count++){
        echo "$numbers[$count] ". "<br>";
    }
    ?>
<?php require "includes/footer.php" ?>