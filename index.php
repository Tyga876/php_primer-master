     
    <?php 

        $title = "Index";
    
        include 'includes/header.php' 
    
    ?>
    

   
  
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php  
        //Printing to HTML using echo
        echo 'Hello PHP!';
        // You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Tyrone Taylor';
        $age = 29;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
   
    <!--<a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a> -->
    <?php
        require 'includes/footer.php' 
    ?> 
    