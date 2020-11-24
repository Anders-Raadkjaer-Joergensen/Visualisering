<?php
$string = "the quick brown fox jumped over the lay dog";
$email = "halu@aspit.dk";
$palindrom = "regninger";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><?php echo strtoupper($string) ?></p>
    <p><?php echo ucfirst($string) ?></p>
    <p><?php echo ucwords($string)?></p>

    <p><?php 
            //if(strpos($string, $word !== false)){}
            if(strpos($string, "fox")){
                echo "ok";
            }
            else{
                echo "not ok";
            }
        ?>
    </p>
    <p><?php echo substr($email, 0, strpos($email, "@")) ?></p>

    <p>
        <?php
            function password_generate($length) 
            {
                $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
                return substr(str_shuffle($data), 0, $length);
            }
            echo password_generate(10)."\n";
        ?>
    </p>

    <p>
        <?php 
            function PalindromCheck($string){   
                if (strrev($string) == $string){   
                    return 1;   
                } 
                else{ 
                    return 0; 
                } 
            }
            if(PalindromCheck($palindrom)){   
                echo "Palindrome";   
            }  
            else{   
                echo "Not a Palindrome";   
            }
        ?>
    </p>

    <p>
        <?php

            if(PalindromCheck($email)){   
                echo "Palindrome";   
            }  
            else{   
                echo "Not a Palindrome";   
            }
        ?>
    </p>
</body>
</html>