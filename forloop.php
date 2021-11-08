    <?php 
    $title = "Simple For Loop";
    include "includes/header.php" 
    ?>
    <?php
        echo "<h2>For Loop</h2>";
        for ($count =0; $count<10; $count++){
            echo "<p style ='color:pink'>Hi Jay</p>";
        }

        for ($count =0; $count <10; $count++){
            echo "<p style='color:blue'>The count is : $count </p>";  
        }
    ?>
    <?php require "includes/footer.php" ?>