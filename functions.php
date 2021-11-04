    <?php
        $title = 'Functions';
        include'includes/header.php'; 
    ?>
    <h1>FUNCTIONS</h1>

    <?php 
        /* defining a function */
        function wirtemessage(){
            echo 'You have a nice personnalite, Have a good time';
        }

        /*Calling a function */
        wirtemessage();
        echo "<hr/>";
        wirtemessage();
        echo "<hr/>";

        /*Function white parameters */
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is : $sum";
            echo '<br/>';

        }

        function changeNum(&$num){
            $num = $num + 10;
        }
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        $num = 1000;
        addFunction(22, 4);
        addFunction(22, $num);
        addFunction('10', '45');
        changeNum($num);
        echo $num. '<br/>';
        $return_value = returnProduct(4, 45);
        echo $return_value. '<br/>';

        
    
    
    ?>
    
    <?php require'includes/footer.php'; ?>