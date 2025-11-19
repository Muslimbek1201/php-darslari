<?php
// Fayldan ma'lumotlarni o'qish
$file = fopen("test.txt", "r");
$content = fread($file,filesize("test.txt"));
fclose($file);
echo $content."<br>";
// Faylga yozish
$file = fopen("data.txt", "w");
fwrite($file , "Faylga ma'lumot yozish.");
fclose($file);
echo "Ma'lumotlar faylga yozildi.";

// Faylga ma'lumot qo'shish
$file = fopen("data.txt", "a");
fwrite($file , "\nFaylga ma'lumot qo'shildi.");
fclose($file);
echo "Yangi ma'lumot qo'shildi.";
// Fayl mvjudligini tekshirish
if(file_exists("data.txt")){
    echo "Fayl mavjud";
} else {
    echo "Fayl mavjud emas";
}
// Faylni o'chirish
if(file_exists("about.html")){
    unlink("about.html");
    echo "Fayl mavjud <br>";
} else {
    echo "Fayl mavjud emas  <br>";
}
// Fayldan ma'lumotlarni qatorlab o'qish
$file = fopen("data.txt", "r");
while(!feof($file)){
    $line =  fgets($file);
    echo $line. "<br>";
}
fclose($file);

$content = file_get_contents("data.txt");
echo $content."<br>";

file_put_contents("test.txt", "asdfghjklwefb hjk");
file_put_contents("test.txt", "asdfghjklwefb hjk",  FILE_APPEND);

?>