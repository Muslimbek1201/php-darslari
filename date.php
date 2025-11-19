<?php
date_default_timezone_set("Asia/Tashkent");
echo "Xozirgi vaqt : " . date("Y-m-d"). "<br>";
echo "Xozirgi vaqt : " . date("Y m d"). "<br>";
echo "Xozirgi vaqt : " . date("Y.m.d"). "<br>";
echo "Xozirgi vaqt : " . date("Y/m.d"). "<br>";
echo "Xozirgi vaqt : " . date("Y.m.d"). "<br>";
echo "Xozirgi vaqt : " . date("d.m.Y"). "<br>";
echo "Xozirgi vaqt : " . date("m.Y"). "<br>";
echo "Xozirgi vaqt : " . date("Y"). "<br>";
echo "Xozirgi vaqt : " . date("d"). "<br>";
echo "Xozirgi vaqt : " . date("y-m-d"). "<br>";
echo "Xozirgi vaqt : " . date("d.m.y"). "<br>";
echo "Xozirgi vaqt : " . date("d.M.Y"). "<br>";
echo "Xozirgi vaqt : " . date("d.F.Y"). "<br>";
echo "Xozirgi vaqt : " . date("  D d.m.y"). "<br>";
echo "Xozirgi vaqt : " . date("l.m.Y"). "<br>";
echo "Xozirgi vaqt : " . date("l"). "<br>";
echo "Xozirgi soat : " . date("H:i:s"). "<br>";
echo "Xozirgi soat : " . date("H:i"). "<br>";
echo "Xozirgi soat : " . date("H:i:s a"). "<br>";
echo "Xozirgi soat : " . date("h:i:s a"). "<br>";
echo "Xozirgi soat : " . date("Y-m-d H:i:s a"). "<br>";



// 17.11.2025 
echo "Unix time <br>";
echo "Xozirgi vaqt :" . time(). "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d H:i:s", time()). "<br>";
echo "Xozirgi vaqt : " .strtotime("+2 days") . "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d H:i:s ",  strtotime("+2 days")). "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d H:i:s ",  strtotime("11-11-2025")). "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d H:i:s ",  strtotime(" next year")). "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d H:i:s ",  strtotime("-2025 year")). "<br>";
echo "Xozirgi vaqt : " . date("Y-m-d ",  strtotime("-13 years , -5 days , -10 month")). "<br>";




?>