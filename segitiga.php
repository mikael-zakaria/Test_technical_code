<?php


    $value = (string) $_GET['input'];

    $message_error = $_GET['input'];  
    if (!preg_match ("/^[0-9]*$/", $message_error) ){  
        $ErrMsg = "Only numeric value is allowed.";  
        echo $ErrMsg;  
        $value = null;
    }

    function segitiga($input) {

        for ($i=0; $i<strlen($input); $i++) {

            $counter=0;

            for($j=0; $j<=$i; $j++){

                $counter++;

                if($counter == 1) {
                    echo $input[$i];
                }

                echo "0";

            }

            echo "<br>";

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
            segitiga($value);
        }
        
    ?>
    
</body>
</html>