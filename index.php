<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo "How are you?"; ?></h1>
        <?php 
            /* Hi how are you
            Where are you form */
            # this is a commnet
            echo "<h1>Hi and welcome back.</h1>";
            echo "<p>Welcome to Full Stack - Batch 1</p>";

            $a = 6;
            $b = 5;
            echo $a + $b;
            echo "<br/>";
            function myFunc() {
                // $a = 3;
                global $a;
                echo $a;
            }
            echo "<br/>";
            myFunc();
            echo "<br/>";
            echo $a;
            echo"<br/>";
            $name = "Ali";
            echo "Welcome to the class ".$name;
        ?>
    </body>
</html>