<?php

    // var_dump($_GET['input']);

    $value = (int) $_GET['input'];

    $message_error = $_GET['input'];  
    if (!preg_match ("/^[0-9]*$/", $message_error) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo $ErrMsg;  
        $value = null;
    }

    function prima($input) {

        for($i=1; $i<$input; $i++) {

            $counter = 0;

            for($j=1; $j<=$i; $j++) {

                if($i % $j == 0) {
                    $counter++;
                }

            }

            if($counter == 2) {
                echo $i . " ";
            }

        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ganjil.php" method="get">
        <input type="text" name="input" placholder="Input Angka">
        
        <br><br>

        <button type="submit" name="button1">Generate Segitiga</button>
        <button type="submit" name="button2">Generate Bilangan Ganjil</button>
        <button type="submit" name="button3">Generate Bilangan Prima</button>
    </form>

    <?php 


        if ($value != null){
            prima($value);
        }
        
        
        

        

    ?>
    
</body>
</html>