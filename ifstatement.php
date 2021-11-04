    <?php
     $title = 'If Statements';
        include'includes/header.php'; 
    ?>

    <?php
    
    echo '<h2>If Statements <h2/>';
    
    $grade = 70;

    if($grade >= 50){
        echo "<h3 style = 'color : green' >You have passed<h3/>";
    }
    else{
        echo "<h3 style = 'color : red' >You have failed<h3/>";
    }
    $grade = 'F';
    if($grade == 'A'){
        echo '<h2 style = "color : blue">you are a rockstar<h2/>';
    }
    elseif($grade == 'B'){
        echo '<h2 style = "color : green">you did well<h2>';
    }
    else{
        echo '<h2 style = "color : red">you have failed........<h2/>';
    }

    ?>
    <?php require'includes/footer.php'; ?>