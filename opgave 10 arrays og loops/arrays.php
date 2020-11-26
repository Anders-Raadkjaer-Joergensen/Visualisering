<?php 
    $elever = array("anders", "thomas", "patrick", "dani", "alexander");
    $find = "anders";
    $findIkke = "michael";

    /*$months = array(
        array(
            "januar" => "31",
            "marts" => "31",
            "maj" => "31",
            "juli" => "31",
            "august" => "31",
            "oktober" => "31",
            "december" => "31",
        ),
        array(
            "februar" => "28",
            "april" => "30",
            "juni" => "30",
            "september" => "30",
            "november" => "30",
        )
    )*/

    $months = (
        "januar" => "31",
        "februar" => "28",
        "marts" => "31",
        "april" => "30",
        "maj" => "31",
        "juni" => "30",
        "juli" => "31",
        "august" => "31",
        "september" => "30",
        "oktober" => "31",
        "november" => "30",
        "december" => "31"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPArrays</title>
</head>
<body>
        <?php
            function findName($elever,$find){
                foreach ($elever as $plads => $elev ) {
                    if ($elev == $find) {
                        return $plads;
                    }
                }
                return 5;
            };
            if (findName($elever,$find) < 5) {
                echo ucfirst($find)." findes i arrayet på plads ".findName($elever,$find);
            } 
            else {
                echo ucfirst($find)." findes ikke i arrayet";
            };
        ?>
        >.>
        <p>
            <?php

                if (in_array($findIkke, $elever)){
                    echo ucfirst($findIkke)." findes i arrayet";
                }
                else
                {
                    echo ucfirst($findIkke)." findes i ikke arrayet";
                }
                
            ?>
        </p>
        <p>
            <?php

            ?>
        </>
</body>
</html>