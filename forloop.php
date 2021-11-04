    <?php
        $title = 'For Loop';   
        include'includes/header.php'; 
    ?>
    <h1>For Loops</h1>

    <?php
        // For Loops
        for($count = 0; $count < 20; $count++){
            echo '<p> HELLO WORLD </p>';
        }
        for($count = 0; $count < 20; $count++){
            echo "<p>the count is : $count</p>";
        }
    
    ?>
    <?php require'includes/footer.php'; ?>