<?php 
    $title = "Simple While/Do-While Loop";
    include "includes/header.php" 
?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        // Infinite loop ( Vong lap vo tan)
        // while ($grade <10){
        //     echo "<p>I am less than 10</p>";
        // }

        // Co the thay $grade ++ = break;

        // Pre-condition loop ( check condition trc khi action)
        while ($grade <10){
            echo "<p>I am $grade </p>";
            $grade ++;
        }
        echo "Exit Loop";
    ?>
    <h1>Do-While Loop</h1>
    <?php
        // Sau khi chay het vong while loop thi value cua $grade =10 nen vong lap 
        // do while loop chi lap lai 1 lan
        // Post-condition loop (action trc r moi check condition)
        do{
            echo "<p>I am $grade</p>";
            $grade ++;
        }
        while($grade <10);
        echo "Exit Loop";
    ?>

    <h1>Do-While Loop Part 2</h1>
    <?php
        $grade = 0;
        do{
            echo "<p>I am $grade</p>";
            $grade ++;
        }
        while($grade <10);
        echo "Exit Loop";
        echo "<br>";
    ?>
<?php require "includes/footer.php" ?>