<?php

    // $thisISAVariable = "Robbie";
    $name = "Robbie";
    $surname = "Wilder";

    $fullName = "$name $surname";



 const passportID = "007";


 $cars = ["lambo", "BMW", "Volvo"];
 $cars[] = "Ferrari";
 $add = array_unshift($cars,"Porsche");
 $reverse = array_reverse($cars);
//  print_r($cars);
$emails = array("robbie" => "robert.g.wilder.com");

print_r($add);

// echo $emails["robbie"];

// for($i=0; $i < count($cars); $i++)
// {
//     echo "$cars[$i] <br /> ";
//     // br makes sure it is not all on the same line 
// }

foreach($cars as $car){

echo "my favorite car is $car <br />";

}

foreach($emails as $name1 => $email) {
    echo"The email of $name1 is $email <br />";

}

// dd($cars);

$myNumber = 5;

function addFive($number){
    $number += 5;

}
addFive($myNumber);

echo "My Global variable myNumber is $myNumber <br />";

function addTen(&$number){

    $number += 10;
}
addTen($myNumber);
echo "My Global variable myNumber is $myNumber <br />";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Intro to PHP</h1>
<h2>my name is <?php echo $name . '' .$surname ;?>  </h2>
<h1>My passport number is <?php echo passportID ?></h1>

    
</body>
</html>