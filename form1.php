<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // ISmni tekshiring
    if (empty($_POST['name'])){
        $nameErr = "ismni kiriting!";  
    } else {
        $name = $_POST['name'];
        if(!preg_match("/^[a-zA-Z- ']*$/",$name)){
            $nameErr = "Faqat harf va bo'sh joy bo'lishi mumkin";
        }
    }
    // E-mailni tekshiring
     if (empty($_POST['email'])){
        $emailErr = "emailni kiriting!";  
    } else {
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Email noto'gri formatda";
        }
    }

// Xabarni tekshirish
 if (empty($_POST['xabar'])){
        $messageErr = "xabarni kiriting!";  
    } else {
        $xabar = $_POST['xabar'];
        if(!preg_match("/^[a-zA-Z- ']*$/",$xabar)){
            $messageErr = "Faqat harf va bo'sh joy bo'lishi mumkin";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Aloqa shakli</title>
  
</head>
<body>
  <header>
    <h1>Aloqa shakli</h1>
  </header>

  <nav>
    <a href="about.html">About</a>
    <a href="form.html">Form</a>
  </nav>

  <div class="container">
    <h2>Biz bilan bog‘laning</h2>
    <form method="POST">
      <label for="name">Ismingiz:</label>
      <input type="text" id="name" placeholder="Ismingizni kiriting" >
      <span style="color:red;"><?=$nameErr ?></span>

      <label for="email">Email:</label>
      <input type="email" id="email" placeholder="Email manzilingiz" >
       <span style="color:red;"><?=$emailErr ?></span>

      <label for="message">Xabar:</label>
      <textarea id="message" rows="5" name="xabar" placeholder="Xabaringizni yozing..." >

              </textarea>
         <span style="color:red;"><?= $messageErr ?></span>


      <button type="submit">Yuborish</button>
    </form>
  </div>

  <footer>
    <p>© 2025 WebDesign. Barcha huquqlar himoyalangan.</p>
  </footer>
</body>
</html>