<?php 

$dayOfTheWeek = "sunday";
    if ($dayOfTheWeek == "sunday" || $dayOfTheWeek == "Saturday"){
        echo "We are on the Weekend <br />";
    } else {
        echo "We are on the working week <br />";
    }

$wallet = 500;

if($wallet > 0 && $wallet < 1000){
    echo "lets go to the pub<br />";
}

$favColour = "Yellow";

switch($favColour){
    case 'red':
        echo "My favorite colour is red";
    break;
    case 'blue':
        echo "My favorite colour is blue";
    break;
    default:
    echo "my favorite colour is something else";
}

// <br />

?>