<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Data base connection</title>
    </head>
    <body>
        <?php
            require 'config.php';
            include 'includes/header.php';
            
            // Create connection
            // $conn = mysqli_connect($servername, $username, $password);
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // echo "Connected successfully";
            $sql = "SELECT * FROM Country";
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

            include 'includes/footer.php';
        ?>
    </body>
</html>