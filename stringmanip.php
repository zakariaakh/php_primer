    <?php
        $title = 'String Manipulation';
        include'includes/header.php'; 
    ?>  
    <h1>String Manipulation</h1>
    <?php 
        //Concatenation of string
        $phrase1 = "student zho came late";
        $phrase2 = "in class, stand white Rock";
        $name = "zakaria akhdam";
        echo $phrase1 . ', named ahemad ' . $phrase2;
        echo '<br/>';
        echo '<hr/>';

        // String transformation
        echo 'Uppercase first lettre:' .ucfirst($name).'<br/>';
        echo 'Uppercase first lettre of each words:' .ucwords($name).'<br/>';
        echo 'Uppercase : '.strtoupper($name).'<br/>';
        echo 'Lowercase : '.strtolower("THIS IS ZAS UPPER").'<br/>';
        echo '<hr/>';
        echo 'Repeat String : '.strtoupper(str_repeat('a', 10)).'<br/>';
        echo '<br/>';
        echo 'Get a Substring : '. substr($name, 5, 10).'<br/>';
        //echo get position of a caractere
        echo 'Get position of "R": '.strpos($name, 'r').'<br/>';
        echo 'Find caracter "A": '.strchr($name, 'a').'<br/>';
        echo 'Find lenght of string: ' .strlen($name).'<br/>';

        echo 'Withot Trim: '."A". " B C D " . "E". '<br/>';
        echo 'Trim spaces Both sides: '. "A". trim(" B C D "). "E".'<br/>';
        echo 'Trim spaces to the lift: '. "A". ltrim(" B C D "). "E".'<br/>';
        echo 'Trim spaces to the right: '. "A". rtrim(" B C D "). "E".'<br/>';
        echo 'Replace string whit other: '.str_replace("stand", 'sit', $phrase2).'<br/>';

      
    
    
    ?>
    <?php require'includes/footer.php'; ?>