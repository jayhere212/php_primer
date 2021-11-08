    <?php 
    $title = "Simple DateTime Manipulation Statement";
    include "includes/header.php" 
    ?>
    <h1>DateTime Manipulation</h1>
    <?php
        $datenow = getdate();
        echo "Today is : <br>";
        echo $datenow["mday"]."/ " ;
        echo $datenow["mon"]."/ ";
        echo $datenow["year"]." ";
        echo $datenow["hours"]. " : ";
        echo $datenow["minutes"]. " : ";
        echo $datenow["seconds"]."<br>";
        

        // Print in 1 line
        echo "Today is : <br>".$datenow["mday"]."/ ".$datenow["mon"]."/ ".
        $datenow["year"]. " ".$datenow["hours"]. " : ".
        $datenow["minutes"]. " : ". $datenow["seconds"]."<br>";
        echo "<br>";
        

        // print in ra 1 chuoi
        // echo in ra >=1 chuoi
        // G viet hoa la tinh theo dong ho 24h, g thuong la theo dong ho 12h
        echo date("d/m/y G:i:s ",time()). "<br>";
        echo  "Today is : ". "<br>";
        echo date ("j F Y, \a\\t g:i:s a ",time());
        echo "<br>";
        
    ?>
<?php require "includes/footer.php" ?>