<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php 
     $title = "For Loops";
    include 'includes/header.php' ?>
    <h1>For Loops</h1>

    <?php 
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }
        
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>
 
 </body>
</html>