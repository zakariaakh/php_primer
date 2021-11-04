    <?php
        $title = 'Index';
        include'includes/header.php';
      ?>
    <!-- basic html -->
    <h1>Hello world</h1>
    <br/>
    <?php 
        // printing in html using echo
        echo "hello php";
        echo "<br/>";
        echo 'second line';
        echo "<br/>";
    ?>
    
    <?php
        //Declare variable
        $name = "akhdam zakaria";
        $age = 21;
        //echo variable
        echo $name;
        echo '<h1> My name is : '.$name.' </h1>';
        echo '<br/>';
        echo '<h1> My age is : '.$age.' </h1>';
        echo "<h1> My name is : $name";
        echo "<br/>";
        
    ?>
    <button type="button" class="btn btn-warning">CLICK ME!</button>
    <?php require'includes/footer.php'; ?>