<?php
    $title = "Simple If Statement";
    include "includes/header.php" 
?>
    <?php 
        echo "<h1>If Statement</h1>";
        $grade = 5;
        if($grade >=50){
            echo "<h3 style='color:green'>Passed</h3>";
        }
        
        if ($grade <50){
            echo "<h3 style='color:red'>Failed</h3>";
        }

        $grade = "B";
        if ($grade == "A"){
            echo "<h2 style= 'color:green'>Nice bro</h2>";
        }

        else if($grade =="B"){
            echo "<h2 style='color : blue'>Nice try !</h2>";
        }
        
        else {
            echo "<h2 style='color:red'>You failed</h2>";
            echo "<br>";
        }
    ?>
    <?php require "includes/footer.php" ?>