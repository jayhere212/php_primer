    <?php 
    $title = "Simple Functions";
    include "includes/header.php" 
    ?>  
    <h1>Simple Functions</h1>
    <?php
        /* Define a function */
        function writeMessages(){
            echo "Jay is the best". "<br>";
        }

        /* Call a function */
        writeMessages();

        /* Function with parameters (tham số) */
        // Pass by value
        function addNumbers($num1, $num2){
            $num2 = $num2 + 1;
            $sum = $num1 + $num2;
            echo "Sum of $num1 and $num2 is : $sum"."<br>";
        }
        // Chỉnh sửa gtri gốc của biến = cách thêm & vào trc tên biến
        // Pass by reference
        function changeNum(&$num){
            $num = $num + 20;
        }

        // Có thể dùng tên biến giống nhau cho nhiều function khác nhau
        function returnValue($num1, $num2){
            $value = $num1 * $num2;
            return $value;
        }

        addNumbers(10,20);
        $num = 500;
        addNumbers(10, $num);
        addNumbers("10", "69");
        echo "<hr>";

        changeNum($num);
        echo $num. "<hr>";

        $return_value = returnValue(20,100);
        echo $return_value . "<br>";



    ?>
    <?php require "includes/footer.php" ?>