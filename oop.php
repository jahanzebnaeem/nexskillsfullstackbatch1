<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Concepts</title>
</head>
<body>
    <?php
        include 'includes/header.php';
        # Page content
        class Person {
            private $name;
            private $age;

            function __construct($name, $age=0)
            {
                $this->name = $name;
                $this->age = $age;
            }

            // function add($operand1, $operand2=0)
            // {
            //     if($operand2 != 0){
            //         return $operand1+$operand2;
            //     }
            //     else {
            //         return $operand1+$operand1;
            //     }
            // }
            // function set_name($name) {
            //     $this->name = $name;
            // }
            function get_name() {
                return $this->name;
            }

            // function set_age($age) {
            //     $this->age = $age;
            // }
            function get_age() {
                return $this->age;
            }
            
            function study(){
                echo "This is from person's class";
            }
        }

        class FullStackBatch1Student extends Person {
            function reads() {
                echo "I do read";
            }
            
            function study()
            {
                echo "This is from Student's class";
            }
        }
        // $student = new FullStackBatch1();
        // $student->set_name("Waleed");
        // $student->set_age("20");
        // $student = new FullStackBatch1("Waleed Akbar", 20);
        // echo $student->get_name();
        $student = new FullStackBatch1Student("Waleed Akbar Bhatti", 20);
        $student->study();
        echo "<br>";
        $student->reads();
        include 'includes/footer.php';
    ?>
</body>
</html>