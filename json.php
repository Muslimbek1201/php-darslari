<?php
$data = [
    "ism" => "Ramazon",
    "yosh" => 14,
    "shahar" => "Xonqa"
];
$json = json_encode($data);
print_r($data);
echo "<br>";
echo $json;
// jsonni chiroyli formatda chiqarish
$json = json_encode($data, JSON_UNESCAPED_UNICODE |  JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";
// Json => Php
$json = '{ "ism" => "Jamshid" , "yosh" => "15" "shahar" => "Urganch" }';
$data_object = json_decode($json);
$data_array = json_decode($json ,true);

echo "<br>";
print_r($data_object);
echo "<br>"; 
print_r($data_array);
// Murakkab massiv
$data = [
     'user' => [
        [
            "ism" => "Ramazon",
            "yosh" => 14,
            "shahar" => "Xonqa"
        ],
        [
            'ism' => 'Ramazon',
            'yosh' => 14,
            'shahar' => 'Xonqa'
        ],
     ]
    ];
    echo "<pre>". json_encode($data , JSON_PRETTY_PRINT). "</pre> <br>";
$json = '{
    "user": [
            {
            "ism" => "Rasul",
            "yosh" => 14,
            "shahar" => "Xonqa"  
            },
            {
            "ism" => "Sanjar",
            "yosh" => 18,
            "shahar" => "Urganch"
            }

    ]
}';
print_r (json_decode($json ,true));
// PHP =>JSON  va fayliga yozish
$json = json_encode($users, JSON_PRETTY_PRINT);
file_put_contents("users.json",$json);
echo "users.json fayliga saqlandi <br>";

$jsonText = file_get_contents("users.json");
$users = json_decode($jsonText, true);
foreach($users as $item) {
    echo $item['name']."".$item['age']. "<br>";
}
?>