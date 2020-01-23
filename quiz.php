<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Class Quiz</title>
    </head>
    <body>
        <?php
            require 'config.php';
            // class Person {
            //         private $name;
            //         private $age;

            //         function __construct($name, $age=0)
            //         {
            //             $this->name = $name;
            //             $this->age = $age;
            //         }
            // }
            // class Employee extends Person {
            //         private $empID;
            // }
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM City";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. "<br>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        ?>
    </body>
</html>