    <?php
        $title = 'While/Do While Loops';
        include'includes/header.php'; 
    ?>

    <h1>while loop</h1>
    <?php
        $grade = 0;
        //Infinite loop
        //while($grade < 10){
        //   echo '<p>I AM LESS THAN TEEN</p>';
       // }
        //pre-Condition loop
       while($grade < 10){
            echo '<p>I AM LESS THAN TEEN</p>';
            $grade++;
       }
       echo 'exit of loop';

    ?>
    
    <h1>do while loop</h1>
    <?php 
        //Post-Condition loop
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while($grade < 10);

        echo 'exit of do while loop';
    
    
    ?>
    <?php require'includes/footer.php'; ?>