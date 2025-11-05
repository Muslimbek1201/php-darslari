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
// 05.11
$son = [0];
$son[] = 1;
$son[] = 15;
$son['ism'] = "Ali";
print_r($son);
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
 
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
$cars = array("brand" => "Ford", "model" => "Mustang",);
$cars+= array("color" => "red",  "year" => 1964);

$sonlar1 = [45,8,6,3,54,205,"test"];
array_splice($sonlar1,1, 3);
print_r($sonlar1);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
$son = [53,68,85,98,23,29,2,3,66,];
sort($son);
rsort($son);
print_r($son);

$cars = [
    ["brand" => "Ford", "model" => "Mustang", "year" => 1964],
    ["brand" => "BMW", "model" => "M5", "year" => 2024],
    ["brand" => "Chevrolet", "model" => "Onix", "year" => 2024],
];
echo $cars[0]['brand']."\n";
echo $cars[1]['brand']."\n";
for($i = 0; $i < count($cars);$i++);{
    foreach($cars[$i] as $item){
        echo $item." ";
    }
    echo "\n";
}

$son = [53,68,85,98,23,29,2,3,66,];
foreach($son as $x ){
    if($x %2 ==0){
        echo $x;
    }
}
$son = [2,3,2,2,];





?>