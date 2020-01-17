<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Array Sample</title>
    </head>
    <body>
        <?php
            include 'includes/header.php';
            // $arr = array(1,2,3,4);
            // $mark = array("Ali"=>"65", "Ahmad"=>"75", "Bilal"=>"85");
            $marks = array(array("Ali",65,80),array("Ahmad",75,70),array("Bilal",85,90));
            // for ($i=0; $i < count($arr); $i++) { 
            //     echo $arr[$i];
            // }
            // $i = 0;
            // while ($i < count($arr)) {
            //     echo $arr[$i];
            //     $i++;
            // }
            // echo $mark['Ali'];
            // foreach ($mark as $key => $value) {
            //     echo "Key is :".$key, " Value is :".$value."<br/>";
            // }
            // $x = 1;
            // while ($x <= 10) {
            //     if ($x%2 == 0) {
            //         echo $x." is even number<br/>";
            //     }
            //     else {
            //         echo $x." is odd number<br/>";
            //     }
            //     $x++;
            // }
            // function guessMyName($fName, $lName) {
            //     echo "Your name is ".$fName." ".$lName."<br/>";
            // }

            // guessMyName("Waleed", "Akbar");
            // guessMyName("Mehmood", "Atta");
            // guessMyName("Muneeb Oneeb Rehman", "Gulzar Ahmad")
            include 'includes/footer.php';
        ?>
    </body>
</html>