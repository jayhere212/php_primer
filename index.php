    <?php 
    $title = "Index";
    include "includes/header.php" 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML</h1>
    <?php 
    // Printing to HTML using echo
    echo "Hi PHP";
    echo "<br>";
    echo "Second Line";
    
    ?>

    <?php
        $name = "Chuoi JR";
        echo "<br>";
        echo $name;
        echo "<h1>My name is: $name </h1>";
        $age =20;
        echo "<h3>I am : $age </h3>";
    ?>
    <button class ="btn btn-primary">Click me!</button>
    <a href ="https://www.heroku.com" class ="btn btn-danger"
    target ="_blank">Heroku</a>
    <?php require "includes/footer.php" ?>