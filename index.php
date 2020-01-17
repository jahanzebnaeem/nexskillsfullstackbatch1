<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Document</title>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <h1><?php echo "How are you?"; ?></h1>
        <?php 
            /* Hi how are you
            Where are you form */
            # this is a commnet
            echo "<h1>Hi and welcome back.</h1>";
            echo "<p>Welcome to Full Stack - Batch 1</p>";
        ?>
        <h1> This is the html tag to display heading.</h1>
        <?php
            $a = 6;
            $b = 5;
            echo $a + $b;
            echo "<br/>";
            function myFunc() {
                // $a = 3;
                global $a;
                echo "<div class='koib'>".$a."</div>";
            }
            echo "<br/>";
            myFunc();
            echo "<br/>";
            echo $a;
            echo"<br/>";
            $name = "Ali";
            echo "Welcome to the class ".$name;
            include 'includes/footer.php';
        ?>
    </body>
</html>