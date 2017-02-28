<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <?php

    $myAge = 15;

    /*
    //Conditional Statements
    if ($myAge < "16"){
        print "I'm Sorry you are Underage, and therefore can't buy any product. Thank You";
    }
    elseif ($myAge >= "16" && $myAge < "18")
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


    //Switch Statement Activity

    $wantedGood = "mugs";

    switch($wantedGood){
        case "mugs":
            print "You have to be 18 to buy mugs";
            break;
        case "specs":
            print "You have to be over 16 to buy specs";
            break;
        case "sausage rolls":
            print "You have to be over 21 to buy sausage rolls";
            break;
        default:
            echo "You have to be between these age groups to buy these products";
    }
*/
    $provisionedActivities = array("Specs","Mugs","Sausage Rolls");

    foreach ($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    $provisionedActivities[1]="Hugs"; //modifies mugs to hugs
    unset($provisionedActivities[2]); //removes sausage rolls


    ?>
</p>

</body>
</html>