
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
    <?php 
        $grade = 111;

        echo "Input: " . $grade . "<br>";

        echo "Output: You got a ";

        if($grade < 60){//<59 included
            echo "F!";
        }elseif($grade < 70){ //60-69 included
            echo "D!";
        }elseif($grade < 80){//70-79 included
            echo "C!";
        }elseif($grade < 90){//80-89 included
            echo "B!";
        }else{ //90+
            echo "A!";
        }
        
    ?>
</body>
</html>