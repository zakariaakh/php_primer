    <?php
        $title = 'Switch Statement';
        include'includes/header.php'; 
     ?>
    <h1>Switch Statements</h1>

    <?php
        $grade = 'F';

        switch($grade){
            case 'A':
                echo '<h2 style = "color : green">your a rockstar<h2/>';
                break;
            case 'B':
                echo '<h2 style = "color : blue">you did well<h2>';
                break;
            default:
                echo '<h2 style = "color : red">you have failed........<h2/>';
                break;
        }
    
    
    ?>
    
    <?php require'includes/footer.php'; ?>