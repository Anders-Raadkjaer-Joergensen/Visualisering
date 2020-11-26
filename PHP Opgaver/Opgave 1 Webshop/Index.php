<?php 
    $minute = date("i");
    $month = date("m")




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruitamorgana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php if (($minute%2) == 0){echo "light";} else {echo "dark";}?>">
    <header>
        <img src="<?php if ($month>6){echo "./Images/klementiner.jpg";} else {echo "./Images/blue-wet-isabella-grapes-bunch.jpg";}?>">
    </header>
</body>
</html>