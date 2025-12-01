<?php
session_start();
// unset($_SESSION ['age']); // Faqat bitta qiymatni o'chirish 
//  session_unset(); // Barcha ma'lumotlarni o'chiradi 
session_destroy(); // Barcha ma'lumotlarni o'chiradi va serverdan session faylini ham o'chirib tashlaydi
echo "Ma'lumotlar o'chirildi";


?>