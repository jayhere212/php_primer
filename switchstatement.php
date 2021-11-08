<?php 
    $title = "Simple Switch Statement";
    include "includes/header.php" 
?>
    <?php
        echo "<h1>Switch Statement</h1>";
        $grade = "E";
        switch($grade){
            case "A":
                echo "<h2 style= 'color:green'>Nice bro</h2>";
                break;
            case "B":
                echo "<h2 style = 'color:blue'>Nice try !</h2>";
                break; 
            case "C":
                echo "<h2 style= 'color:yellow'>You should go home and cry</h2>";
                break;
            case "D":
                echo "<h2 style ='color:orange'>Should not go to school</h2>";
            break;
            default:
                echo "<h2 style ='color:red'>Đồ ngu đồ ăn hại</h2>";
                break;
        }

    ?>
<?php require "includes/footer.php" ?>