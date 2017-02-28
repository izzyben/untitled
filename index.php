<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <?php

    $myAge = 21;

    if ($myAge >= "16" && $myAge < "18")
    {
        print "You can buy SPECS only";
    }
    
    elseif ($myAge >= "18" && $myAge < "21") {
        print "You can buy SPECS & MUGS";
    }
     elseif ($myAge >= "21")
     {
        print "You can buy SPECS, MUGS and SAUSAGE ROLLS";
    }
    ?>
</p>

</body>
</html>