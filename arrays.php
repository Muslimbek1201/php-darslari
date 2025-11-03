<?php
// birinchi usul
$sonlar = array(5,32,45,3,8,0,4,"test");
// ikkinchi usul
$sonlar1 = [45,8,6,3,54,205,"test"];
print_r($sonlar);
echo $sonlar[2];
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
// massivdagi qiymatni almashtirish
echo $sonlar1[5];
echo "\n";
$sonlar1[5] = 100;
echo $sonlar1[5];
print_r($sonlar1);
echo "\n";
//addd valuee
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
    echo "$x";
} 
array_push($cars,"Chevrolet");
$cars[] = "byd";
print_r($cars);

$user = ["ism" => "Ramazon","familiya" => "Vapoyev", "t_yili"   => 2011];
$son = [0 => 2, 1 =>5];
print_r($user);
echo $user["ism"];
print_r($son);
$user["famniliya"] = "Karimov";
echo $user["familiya"];
$user["tel"] =1234562;
echo "\n";




?>